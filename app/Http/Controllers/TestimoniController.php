<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use App\Models\Alumni;
use Illuminate\Support\Facades\Auth;
class TestimoniController extends Controller
{
    function show(){
        $data['testimoni'] = Testimoni::all();
        return view ('admin.testimoni', $data);
    }

    function testimoni_alumni(){
        $data['testimoni'] = Testimoni::where('nisn', Auth()->guard('alumnis')->id())->get();;
        return view('admin.testimoni_alumni', $data);
    }

    function add(){
        return view('admin.form_testimoni');
    }

    function create(Request $request){
        Testimoni::create([
            'nisn' => Auth::guard('alumnis')->user()->nisn,
            'testimoni' => $request-> testimoni,
        ]);
        return redirect('testimoni/alumni');
    }

    function delete($id){
        Testimoni::where('id_testimoni', $id)->delete();
        return redirect('testimoni');
    }

}
