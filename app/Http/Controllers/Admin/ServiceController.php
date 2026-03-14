<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Menampilkan halaman layanan Balik Nama
     */
    public function balikNama()
    {
        return view('admin.services.balik-nama');
    }
}
