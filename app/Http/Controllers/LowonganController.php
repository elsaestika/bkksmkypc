<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;
use App\Models\Perusahaan;
use Illuminate\Support\Facades\Auth;


class LowonganController extends Controller
{
    function show(){
        $data['lowongan'] = Lowongan::all();
        return view('lowongan', $data);
    }

    function add(){
        $data = [
            'action' => url('/lowongan/create'),
            'tombol' => 'simpan',
            'lowongan' => (object)[

                'id_perusahaan' => '',
                'lowongan' => '',
                'syarat' => '',
                'keahlian' => '',
                'kualifikasi' => '',
                'jam_kerja' => '',
                'gaji' => '',
                'pendidikan' => '',
                'tipe_pekerjaan' => '',
                'tgl_post' => '',
                'tgl_konfirmasi' => '',
                'status' => '',
            ]
            ];

        $data['perusahaan'] = Perusahaan::all();
            return view('form_lowongan', $data);
    }

    function create(Request $request){
        Lowongan::create([
            // 'nisn' => Auth::guard('alumnis')->user()->nisn,
            'id_admin' =>Auth::guard('admin')->user()->id_admin,
            'lowongan' => $request->lowongan,
            'id_perusahaan' => $request->id_perusahaan,
            'syarat' => $request->syarat,
            'keahlian' => $request->keahlian,
            'kualifikasi' => $request->kualifikasi,
            'jam_kerja' => $request->jam_kerja,
            'gaji' => $request->gaji,
            'pendidikan' => $request->pendidikan,
            'tipe_pekerjaan' => $request->tipe_pekerjaan,
            'tgl_post' => date('Y-m-d'),
            'tgl_konfirmasi' =>date('Y-m-d'),
            'status' => $request->status
        ]);
        return redirect('lowongan');
    }

    function edit($id){
        $data['lowongan'] = Lowongan::where('id_lowongan', $id)->first();
        $data['action'] = url('lowongan/update').'/'.$data['lowongan']->id_lowongan;
        $data['tombol'] = "update";
        $data['perusahaan'] = Perusahaan::all();
        return view('form_lowongan', $data);
    }

    function update(Request $request){
        Lowongan::where('id_lowongan', $request->id)->update([
            'id_perusahaan' => $request->id_perusahaan,
            'syarat' => $request->syarat,
            'keahlian' => $request->keahlian,
            'kualifikasi' => $request->kualifikasi,
            'jam_kerja' => $request->jam_kerja,
            'gaji' => $request->gaji,
            'pendidikan' => $request->pendidikan,
            'tipe_pekerjaan' => $request->tipe_pekerjaan,
            'tgl_post' => date('Y-m-d'),
            'tgl_konfirmasi' =>date('Y-m-d'),
            'status' => $request->status
        ]);
        return redirect('lowongan');
    }

    function delete($id){
        Lowongan::where('id_lowongan', $id)->delete();
        return redirect('lowongan');
    }

    function detail($id){
        $data['lowongan'] = Lowongan::find($id);
        return view('detail', $data);
    }

}
