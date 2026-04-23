<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('region')->orderBy('transaction_date', 'desc')->get();
        return view('admin.transactions.index', compact('transactions'));
    }

    public function report()
    {
        $transactions = Transaction::with('region')->where('status', 'completed')->orderBy('transaction_date', 'desc')->get();
        return view('admin.transactions.report', compact('transactions'));
    }

    public function printReport()
    {
        $transactions = Transaction::with('region')->where('status', 'completed')->orderBy('transaction_date', 'desc')->get();
        return view('admin.transactions.report-print', compact('transactions'));
    }

    public function create()
    {
        $regions = Region::all();
        return view('admin.transactions.create', compact('regions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_type' => 'nullable|in:perorangan,pt',
            'company_name' => 'nullable|string|max:255',
            'region_id' => 'required|exists:regions,id',
            'capital_cost' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0',
            'transaction_date' => 'required|date',
        ]);

        $data = $request->all();
        $data['profit'] = $request->selling_price - $request->capital_cost;
        $data['invoice_number'] = 'INV-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(3)));
        $data['stnk_received'] = $request->has('stnk_received');
        $data['plat_received'] = $request->has('plat_received');
        $data['bpkb_received'] = $request->has('bpkb_received');

        Transaction::create($data);

        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    public function edit(Transaction $transaction)
    {
        $regions = Region::all();
        return view('admin.transactions.edit', compact('transaction', 'regions'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_type' => 'nullable|in:perorangan,pt',
            'company_name' => 'nullable|string|max:255',
            'region_id' => 'required|exists:regions,id',
            'capital_cost' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0',
        ]);

        $data = $request->all();
        $data['profit'] = $request->selling_price - $request->capital_cost;
        $data['stnk_received'] = $request->has('stnk_received');
        $data['plat_received'] = $request->has('plat_received');
        $data['bpkb_received'] = $request->has('bpkb_received');

        $transaction->update($data);

        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function uploadEvidence(Request $request, Transaction $transaction)
    {
        $request->validate([
            'evidence_image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Max 2MB
        ]);

        if ($request->hasFile('evidence_image')) {
            // Delete old image if exists
            if ($transaction->evidence_image) {
                Storage::disk('public')->delete($transaction->evidence_image);
            }

            $image = $request->file('evidence_image');

            // OPTIMIZATION: Simple resizing if GD is available (Basic Approach)
            // For a "standard hosting", we use basic file storage but enforce the 2MB limit.
            // If the user wants deeper compression, we might need Intervention Image package.
            // For now, let's store it securely.

            $path = $image->store('evidence', 'public');
            $transaction->update(['evidence_image' => $path, 'status' => 'processing']);
        }

        return back()->with('success', 'Bukti berhasil diunggah dan status diperbarui.');
    }

    public function invoice(Transaction $transaction)
    {
        $transaction->load('region');
        return view('admin.transactions.invoice', compact('transaction'));
    }

    public function destroy(Transaction $transaction)
    {
        if ($transaction->evidence_image) {
            Storage::disk('public')->delete($transaction->evidence_image);
        }
        $transaction->delete();
        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
