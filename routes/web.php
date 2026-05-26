<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\ServiceController;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/balik-nama', [HomeController::class, 'balikNama'])->name('balik-nama');

// Optional: Add other routes referenced in the template
Route::get('/blog-details', function () {
    return view('index');
})->name('blogDetails');
Route::get('/team-details', function () {
    return view('index');
})->name('teamDetails');
Route::get('/project-details', function () {
    return view('index');
})->name('projectsDetails');

// ============================
// Admin Authentication Routes
// ============================
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// ============================
// Admin Dashboard Routes (Protected)
// ============================
Route::prefix('admin')->middleware('auth')->group(function () {
    // Dashboard utama: /admin
    Route::get('/', [AdminController::class, 'showPage'])->name('admin.index');

    // Region Management
    Route::resource('regions', RegionController::class);

    // Transaction/Customer Management
    Route::resource('transactions', TransactionController::class);
    Route::get('laporan-transaksi', [TransactionController::class, 'report'])->name('transactions.report');
    Route::get('laporan-transaksi/print', [TransactionController::class, 'printReport'])->name('transactions.print-report');
    Route::get('transactions/{transaction}/invoice', [TransactionController::class, 'invoice'])->name('transactions.invoice');
    Route::post('transactions/{transaction}/upload-evidence', [TransactionController::class, 'uploadEvidence'])->name('transactions.upload-evidence');

    // Service Management
    Route::get('/balik-nama', [ServiceController::class, 'balikNama'])->name('admin.balik-nama');

    // Semua halaman admin: /admin/{page}
    // Contoh: /admin/dashboard-agent, /admin/property-grid, dll
    Route::get('/{page}', [AdminController::class, 'showPage'])->name('admin.page');
});

// Route fallback untuk melayani file storage jika symlink() tidak aktif/diblokir hosting
Route::get('storage/{path}', function ($path) {
    $filePath = storage_path('app/public/' . $path);
    if (!file_exists($filePath)) {
        abort(404);
    }
    return response()->file($filePath);
})->where('path', '.*');


