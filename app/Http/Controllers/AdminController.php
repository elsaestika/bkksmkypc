<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\support\facades\Hash;

class AdminController extends Controller
{
    function show(){
        $data['admin'] = Admin::all();
        return view('admin.admin', $data);
    }

    function add(){
        $data = [
            'action' => url('/admin/create'),
            'tombol' => 'simpan',
            'admin' => (object)[
                'nama' => '',
                'email' => '',
                'password' => '',
                'kontak' => '',

            ]
            ];
            return view('admin.form_admin', $data);
    }

    function create(Request $request){
        Admin::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make('bkksmkypc'),
            'kontak' => $request->kontak,
        ]);
        return redirect('admin');
    }
}
