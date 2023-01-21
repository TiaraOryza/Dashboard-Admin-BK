<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\foto;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FotoRequest;

class FotoController extends Controller
{
    //menampilkan data
    public function index()
    {
        $foto = foto_data_siswa::all();
        $foto = foto_data_siswa::OrderBy('nisn', 'asc')->paginate(20);

        return view('foto.index', compact('foto'));
    }

    //menambahkan data
    public function create()
    {
        $model = new foto_data_siswa;

        return view('foto.create', compact('model'));
    }

    //menambahkan data baru
    public function store(Request $request)
    {
        $model = new foto_data_siswa;
        $model -> nisn = $request -> nisn;
        $model -> nama_siswa = $request -> nama_siswa;
        $model -> foto_diri = $request -> foto_diri;
        $model -> foto_kk = $request -> foto_kk;
        $model -> foto_ktp = $request -> foto_ktp;
        $model -> foto_ijazah = $request -> foto_ijazah;
        $model -> foto_keluarga = $request -> foto_keluarga;
        $model = save();
        
    }

    //mengedit data
    public function edit($id)
    {
        $model = foto_data_siswa::find($nisn);
        
    }

    //mengupdate data
    public function update(Request $request, $id)
    {
        //
    }

    //menhapus data
    public function destroy($id)
    {
        //
    }

    //searching data
    public function show($id)
    {
        //
    }

}
