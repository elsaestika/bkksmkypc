<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use Illuminate\Support\Facades\Hash;

class AlumniController extends Controller
{
    function show(){
        $data['alumni'] = Alumni::all();
        return view('admin.alumni', $data);
    }

    function add(){
        $data = [
            'action' => url('/alumni/create'),
            'tombol' => 'simpan',
            'alumni' => (object)[
                'nisn' => '',
                'nis' => '',
                'nama_alumni' => '',
                'ttl' => '',
                'ktp' => '',
                'jk' => '',
                'jurusan' => '',
                'thn_ajaran' => '',
                'alamat' => '',
                'kontak' => '',
                'foto' => '',

            ]
            ];
            return view('admin.form_alumni',$data);
    }

    function create(Request $request){
        if ($request->file('ktp')){
            $data['ktp'] = $request->file('ktp')->store('foto');
        }
        if ($request->file('ijazah_pendidikan')){
            $data['ijazah_pendidikan'] = $request->file('ijazah_pendidikan')->store('foto');
        }
        if ($request->file('transkip_nilai')){
            $data['transkip_nilai'] = $request->file('transkip_nilai')->store('foto');
        }
        if ($request->file('skck')){
            $data['skck'] = $request->file('skck')->file('skck')->store('foto');
        }
        if ($request->file('kartu_kuning')){
            $data['kartu_kuning'] = $request->file('kartu_kuning')->store('foto');
        }
        if ($request->file('sks')){
            $data['sks'] = $request->file('sks')->store('foto');
        }
        if ($request->file('foto')){
            $data['foto'] = $request->file('foto')->store('foto');
        }
        Alumni::create([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama_alumni' => $request->nama_alumni,
            'ttl' => $request->ttl,
            'ktp' => $request->ktp,
            'ijazah_pendidikan' => $request->ijazah_pendidikan,
            'transkip_nilai' => $request->transkip_nilai,
            'skck' => $request->skck,
            'kartu_kuning' => $request->kartu_kuning,
            'sks' => $request->sks,
            'jk' => $request->jk,
            'jurusan' => $request->jurusan,
            'thn_ajaran' => $request->thn_ajaran,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'password' => Hash::make('smkypc'),
            'foto' => $request->file('foto')->store('foto'),
        ]);
        return redirect('alumni');
    }

    function edit($id){
        $data['alumni'] = Alumni::where('nisn',$id)->first();
        $data['action'] = url('alumni/update').'/'.$data['alumni']->nisn;
        $data['tombol'] = "update";
        return view('admin.form_alumni', $data);
    }

    function update(Request $request){
        $data = Alumni::where('nisn', $request->nisn)->first();
        if($request->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $request->file('foto')->store('foto');
        }

        Alumni::where('nisn', $request->nisn)->update([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama_alumni' => $request->nama_alumni,
            'ttl' => $request->ttl,
            'ktp' => $request->ktp,
            'jk' => $request->jk,
            'jurusan' => $request->jurusan,
            'thn_ajaran' => $request->thn_ajaran,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'foto' => $foto,
        ]);
        return redirect('alumni');
    }

    function delete($id){
        Alumni::where('nisn',$id)->delete();
        return redirect('alumni');
    }

    function detail($id){
        $data['alumni'] = Alumni::find($id);
        return view('admin.detail', $data);
    }
}
