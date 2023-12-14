<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use Illuminate\Support\Facades\Auth;

class PerusahaanController extends Controller
{
    function show(){
        $data['perusahaan'] = Perusahaan::all();
        return view('admin.perusahaan', $data);
    }

    function add(){
        $data = [
            'action' => url('/perusahaan/create'),
            'tombol' => 'simpan',
            'perusahaan' => (object)[
                'perusahaan' => '',
                'alamat' => '',
                'kontak' => '',
                'deskripsi' => '',
                'foto' => '',
                'status' => ''

            ]
            ];
            return view('admin.form_perusahaan', $data);
    }

    function create(Request $request){
        Perusahaan::create([
            'id_admin' =>Auth::guard('admin')->user()->id_admin,
            'perusahaan' =>$request->perusahaan,
            'alamat' =>$request->alamat,
            'kontak' =>$request->kontak,
            'deskripsi' => $request->deskripsi,
            'foto'=>$request->file('foto')->store('foto'),
            'status' => $request->status
        ]);
        return redirect('perusahaan');
    }

    function edit($id){
        $data['perusahaan'] = Perusahaan::where('id_perusahaan',$id)->first();
        $data['action'] = url('perusahaan/update').'/'.$data['perusahaan']->id_perusahaan;
        $data['tombol'] = "update";
        return view('admin.form_perusahaan',$data);
    }

    function update(Request $request){
        $data = Perusahaan::where('id_perusahaan', $request->id_perusahaan)->first();
        if($request->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $request->file('foto')->store('foto');
        }

        Perusahaan::where('id_perusahaan', $request->id)->update([
            'perusahaan' => $request->perusahaan,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,
            'status' => $request->status
        ]);
        return redirect('perusahaan');
    }

    function delete($id){
        Perusahaan::where('id_perusahaan', $id)->delete();
        return redirect('perusahaan');
    }
}
