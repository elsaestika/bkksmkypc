<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\Lowongan;
use App\Models\Perusahaan;
use App\Models\Lamaran;
use App\Models\Admin;

class DashboardController extends Controller
{
    function index(){
        $jumlah_alumni= Alumni::all()->count();
        $jumlah_lowongan = Lowongan::all()->count();
        $jumlah_perusahaan = Perusahaan::all()->count();
        $jumlah_lamaran = Lamaran::all()->count();
        $jumlah_admin = Admin::all()->count();
        return view('menu', compact('jumlah_alumni', 'jumlah_lowongan', 'jumlah_perusahaan', 'jumlah_lamaran', 'jumlah_admin'));
    }
}
