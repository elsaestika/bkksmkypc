<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lamaran;
use App\Models\Alumni;
use App\Models\Lowongan;
use Illuminate\Support\Facades\Auth;


class LamaranController extends Controller
{
    function show(){
        $data['lamaran'] = Lamaran::all();
        return view('lamaran',$data);
    }

    function add(){
        $data = [
            'action' => url('lamaran/create'),
            'tombol' => 'simpan',
            'lamaran' => (object)[
                'surat_lamaran' => '',
                'cv' => '',

            ]
            ];

            $data['alumni'] = Alumni::all();
            $data['lowongan'] = Lowongan::all();
            return view('form_lamaran',$data);
    }

    function create(Request $request){
        Lamaran::create([
            'id_admin' => Auth::guard('admin')->user()->id_admin,
            'nisn' => Auth::guard('alumnis')->user()->nisn,
            'id_lowongan' => $request->id_lowongan,
            'surat_lamaran' => $request->file('surat_lamaran')->store('foto'),
            'cv' => $request->file('cv')->store('foto'),
        ]);
        return redirect('lamaran');
    }
}
