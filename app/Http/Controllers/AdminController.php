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
