<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wali;
use App\Http\Requests\WaliRequest;
use Illuminate\Support\Facades\DB;

class WaliController extends Controller
{
    //menampilkan data
    public function index()
    {
        $wali = wali::all();
        $wali = wali::OrderBy('nik_wali', 'asc')->paginate(20);
        return view('wali.index', compact('wali'));

    }

    // menambah data
    public function create()
    {
        $model = new wali;
        return view('wali.create', compact('model'));
    }

    // menambah data baru
    public function store(Request $request)
    {
        $model = new wali;
        $model -> nik_wali = $request -> nik_wali;
        $model -> nama_wali = $request -> nama_wali;
        $model -> alamat_wali = $request -> alamat_wali;
        $model -> jenis_kelamin = $request -> jenis_kelamin;
        $model -> agama_wali = $request -> agama_wali;
        $model -> no_hp = $request -> no_hp;
        $model -> save();

        return redirect('wali')
        ->with('succes', 'data berhasil ditambahkan');
    }

     //mengedit data 
     public function edit($nikwali)
     {
         $wali = wali::find($nikwali);
         return view('wali.edit', compact('wali'));
     }

     //mengupdate data
     public function update(WaliRequest $request, $nikwali)
     {
         $wali = wali::find($nikwali);
         $wali -> nik_wali = $request -> nik_wali;
         $wali -> nama_wali = $request -> nama_wali;
         $wali -> alamat_wali = $request -> alamat_wali;
         $wali -> jenis_kelamin = $request -> jenis_kelamin;
         $wali -> agama_wali = $request -> agama_wali;
         $wali -> no_hp = $request -> no_hp;
         $wali -> save();

         return redirect()->route('wali.index');
     }

     //menghapus data
     public function destroy(wali $wali)
     {
        wali::destroy($wali->nik_wali);
        return redirect()-> route('ternak.index');
     }

     //searching data
    public function show($id)
    {
        //
    }
   
   
}
