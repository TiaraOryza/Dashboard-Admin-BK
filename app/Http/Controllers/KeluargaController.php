<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\keluarga;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\KeluargaRequest;

class KeluargaController extends Controller
{
    //menampilkan data
    public function index()
    {
        $keluarga = keluarga::all();
        $keluarga = keluarga::OrderBy('no_kk', 'asc')->paginate(20);
        return view('keluarga.index', compact('keluarga'));
    }

    //menambahkan data
    public function create()
    {
        $model = new keluarga;
        return view('keluarga.create', compact('model'));
    }

    //menambahkan data baru
    public function store(Request $request)
    {
        $model = new keluarga;
        $model -> no_kk = $request -> no_kk;
        $model -> nama_ayah = $request -> nama_ayah;
        $model -> nama_ibu = $request -> nama_ibu;
        $model -> agama_ayah = $request -> agama_ayah;
        $model -> agama_ibu = $request -> agama_ibu;
        $model -> nik_ayah = $request -> nik_ayah;
        $model -> nik_ibu = $request -> nik_ibu;
        $model -> alamat = $request -> alamat;
        $model -> no_hp = $request -> no_hp;
        $model -> pekerjaan_ayah = $request -> pekerjaan_ayah;
        $model -> pekerjaan_ibu = $request -> pekerjaan_ibu;
        $model -> gaji_ayah = $request -> gaji_ayah;
        $model -> gaji_ibu = $request -> haji_ibu;
        $model  -> save();
    }

    //mengedit data
    public function edit($nokk)
    {
        $keluarga = keluarga::find($nokk);
        return view('keluarga.edit', compact('keluarga'));
    }

    //mengupdate data
    public function update(KeluargaRequest $request, $nokk)
    {
        $keluarga = keluarga::find($nokk);
        $keluarga -> no_kk = $request -> no_kk;
        $keluarga -> nama_ayah = $request -> nama_ayah;
        $keluarga -> nama_ibu = $request -> nama_ibu;
        $keluarga -> agama_ayah = $request -> agama_ayah;
        $keluarga -> agama_ibu = $request -> agama_ibu;
        $keluarga -> nik_ayah = $request -> nik_ayah;
        $keluarga -> nik_ibu = $request -> nik_ibu;
        $keluarga -> alamat = $request -> alamat;
        $keluarga -> no_hp = $request -> no_hp;
        $keluarga -> pekerjaan_ayah = $request -> pekerjaan_ayah;
        $keluarga -> pekerjaan_ibu = $request -> pekerjaan_ibu;
        $keluarga -> gaji_ayah = $request -> gaji_ayah;
        $keluarga -> gaji_ibu = $request -> gaji_ibu;
        $keluarga -> save();

        return redirect()->route('keluarga.index');
    }

    //menghapus data
    public function destroy(keluarga $keluarga)
    {
        keluarga::destroy($keluarga->no_kk);
        
        return redirect()->route('keluarga.index');
    }

    //
    public function show($id)
    {
        //
    }
}
