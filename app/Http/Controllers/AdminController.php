<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Region;

class AdminController extends Controller
{
    /**
     * Menampilkan halaman admin berdasarkan nama halaman.
     * Semua halaman admin ada di resources/views/admin/pages/
     */
    public function showPage($page = 'index')
    {
        // Konversi nama halaman ke view path
        $viewPath = 'admin.pages.' . $page;

        // Cek apakah view ada
        if (view()->exists($viewPath)) {
            $data = [];
            if ($page === 'index') {
                $data = [
                    'totalTransactions' => Transaction::count(),
                    'totalProfit' => Transaction::sum('profit'),
                    'totalRegions' => Region::count(),
                    'recentTransactions' => Transaction::with('region')->orderBy('created_at', 'desc')->take(5)->get(),
                ];
            } elseif ($page === 'customers-list') {
                $customers = Transaction::selectRaw('
                        customer_name, 
                        MAX(customer_type) as customer_type, 
                        MAX(company_name) as company_name, 
                        MAX(transaction_date) as last_contacted, 
                        COUNT(id) as total_transactions, 
                        SUM(profit) as total_profit
                    ')
                    ->groupBy('customer_name')
                    ->orderBy('last_contacted', 'desc')
                    ->paginate(20);
                    
                $data = [
                    'customers' => $customers
                ];
            }
            return view($viewPath, $data);
        }

        // Fallback ke halaman 404 admin
        if (view()->exists('admin.pages.pages-404-alt')) {
            return view('admin.pages.pages-404-alt');
        }

        abort(404);
    }
}
