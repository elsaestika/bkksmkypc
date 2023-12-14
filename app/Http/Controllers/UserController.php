<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lamaran;
use App\Models\Lowongan;
use App\Models\Alumni;
use App\Models\Perusahaan;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index(){
        $data ['alumni'] = Alumni::all();
        $data ['testimoni'] = Testimoni::all();
        $data ['perusahaan'] = Perusahaan::all();
        return view('alumni.index', $data);
    }

    function add_lamaran($id){
        $data ['lowongan'] = Lowongan::find($id);
        return view('alumni.create_lamaran', $data);
    }

    function create_lamaran(Request $request){
        Lamaran::where('id_lowongan', $request->id)->create([
            'nisn' => Auth::guard('alumnis')->user()->nisn,
            'id_lowongan' => $request->id_lowongan,
            'surat_lamaran' => $request->file('surat_lamaran')->store('foto'),
            'cv' => $request->file('cv')->store('foto'),
        ]);
        return redirect('loker');
    }

    function loker(){
        $data['lowongan'] = Lowongan::where('status','=','Posting')->get();
        $data['perusahaan'] = Perusahaan::all();
        return view('alumni.loker', $data);
    }

    function detail($id){
        // $data['perusahaan'] = Perusahaan::all();
        $data['lowongan'] = Lowongan::find($id);
        return view('alumni.detail', $data);
    }

    function add_perusahaan(){
       $data['perusahaan'] = Perusahaan::where('status','=','Posting')->get();
       return view('alumni.add_perusahaan', $data);
    }

    function create_perusahaan(Request $request){
        Perusahaan::create([
            'nisn' =>Auth::guard('alumnis')->user()->nisn,
            'perusahaan' =>$request->perusahaan,
            'alamat' =>$request->alamat,
            'kontak' =>$request->kontak,
            'deskripsi' => $request->deskripsi,
            'foto'=> $request->file('foto')->store('foto'),
            'status' => '0'
        ]);
        return redirect('riwayat/perusahaan');
    }

    function index_perusahaan(){
      $data['perusahaan'] = Perusahaan::where('status','=','Posting')->get();
      return view('alumni.index_perusahaan', $data);
    }

    function riwayat_perusahaan(){
        $data ['perusahaan'] = Perusahaan::where('nisn', Auth()->guard('alumnis')->id())->get();
        return view('alumni.riwayat_perusahaan', $data);
    }

    function add_loker(){
        $data['lowongan'] = Lowongan::where('status','=','Posting')->get();
        $data['perusahaan'] = Perusahaan::all();
        return view('alumni.add_lowongan',$data);
    }

    function create_loker(Request $request){
        Lowongan::create([
            'nisn' =>Auth::guard('alumnis')->user()->nisn,
            'id_perusahaan' => $request->id_perusahaan,
            'lowongan' => $request->lowongan,
            'syarat' => $request->syarat,
            'keahlian' => $request->keahlian,
            'kualifikasi' => $request->kualifikasi,
            'jam_kerja' => $request->jam_kerja,
            'gaji' => $request->gaji,
            'pendidikan' => $request->pendidikan,
            'tipe_pekerjaan' => $request->tipe_pekerjaan,
            'tgl_post' => date('Y-m-d'),
            'tgl_konfirmasi' =>date('Y-m-d'),
            'status' => '0'
        ]);
        return redirect('riwayat/lowongan');
    }

    function riwayat_lowongan(){
        $data['lowongan'] = Lowongan::where('nisn', Auth()->guard('alumnis')->id())->get();
        return view('alumni.riwayat_lowongan',$data);
    }

    function profil(){
        $data['alumni'] = Alumni::where('nisn', Auth()->guard('alumnis')->id())->get();
        return view('alumni.profil', $data);
    }

    function update_profil(Request $request){
        $data = Alumni::where('nisn', $request->nisn)->first();
        if($request->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $request->file('foto')->store('foto');
        }
        if($request->ijazah_pendidikan == ''){
            $ijazah_pendidikan = $data->ijazah_pendidikan;
        }else{
            $ijazah_pendidikan = $request->file('ijazah_pendidikan')->store('ijazah_pendidikan');
        }
        if($request->transkip_nilai == ''){
            $transkip_nilai = $data->transkip_nilai;
        }else{
            $transkip_nilai = $request->file('transkip_nilai')->store('transkip_nilai');
        }
        if($request->skck == ''){
            $skck = $data->skck;
        }else{
            $skck = $request->file('skck')->store('skck');
        }
        if($request->kartu_kuning == ''){
            $kartu_kuning = $data->kartu_kuning;
        }else{
            $kartu_kuning = $request->file('kartu_kuning')->store('kartu_kuning');
        }
        if($request->sks == ''){
            $sks = $data->sks;
        }else{
            $sks = $request->file('sks')->store('sks');
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
            'ijazah_pendidikan' => $ijazah_pendidikan,
            'transkip_nilai' => $transkip_nilai,
            'skck' => $skck,
            'kartu_kuning' => $kartu_kuning,
            'sks' => $sks,
        ]);
        return redirect('profil');
    }

}
