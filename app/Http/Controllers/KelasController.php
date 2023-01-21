<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use App\Http\Requests\KelasRequest;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{

     //menampilkan data 
    public function index()
    {
        $kelas = kelas::all();
        $kelas = kelas::OrderBy('nama_kelas', 'asc')->paginate(20);
        return view('kelas.index', compact('kelas'));
    }

    //menambahkan data 
    public function create()
    {
        $model = new kelas;
        return view('kelas.create', compact('model'));
    }

    //mengisikan data baru
    public function store(Request $request)
    {
        $model = new kelas;
        $model -> nama_kelas = $request->nama_kelas;
        $model -> wali_kelas = $request->wali_kelas;
        $model -> save();

        return redirect('kelas')
        ->with('succes', 'data berhasil ditambahkan');
    }

    //mengedit isi data 
    public function edit($namakelas)
    {
        $namakelas = kelas::find($namakelas);
        return view('kelas.edit', compact('kelas'));
    }

    //mengupdate isi data 
    public function update(KelasRequest $request, $namakelas)
    {
        //fungsi elloquent update data
        $kelas = kelas::find($namakelas);
        $kelas -> nama_kelas = $request -> nama_kelas;
        $kelas -> wali_kelas = $request -> wali_kelas;
        $kelas -> save();

        //jika data berhasil diupdate, redirect ke halaman utama
        return redirect()->route('kelas.index')
        ->with('succes', 'data berhasil diupdate');
    }

    //menghapus data 
    public function destroy(kelas $kelas)
    {
        kelas::destroy($kelas->nama_kelas);

        return redirect()->route('kelas.index');
    }

    //mencari data kelas berdasarkan nisn
    public function show($id)
    {
        //
    }

    
}
