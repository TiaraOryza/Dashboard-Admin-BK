<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\keluarga;
use App\Models\kelas;
use App\Models\wali;
use App\Http\Requests\SiswaRequest;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    //menampilkan data
    public function index()
    {
        //$siswa= siswa::with('wali')->get();
        $siswa = siswa::all()->where('id_kelas', '=', '10IPA1');
        $siswa = siswa::OrderBy('nisn', 'asc' )->paginate(20);
        return view('siswa.index', compact('siswa'));

    }

    // public function sepuluh_ipa_satu()
    // {
    //     $siswa_x = siswa::select('nisn','no_absen','jk','nama_siswa'.'id_kelas')->where('id_kelas','10 IPA 1');
    //     return view('siswa_x.sepuluh_ipa_satu', compact('siswa_x'));

    // }

    // menambah data
    public function create()
    {
        $model = new siswa;
        return view('siswa.create', compact('model'));
    }

    //manambah data baru
    public function store(Request $request)
    {
        $model = new siswa;
        $model -> nisn = $request -> nisn;
        $model -> no_absen = $request -> no_absen;
        $model -> nama_siswa = $request -> nama_siswa;
        $model -> id_kelas = $request -> id_kelas;
        $model -> kota_lahir = $request -> kota_lahir;
        $model -> tgtl_lahir = $request -> tgl_lahir;
        $model -> agama_siswa = $request -> agama_siswa;
        $model -> jk_siswa = $request -> jk_siswa;
        $model -> goldar_siswa = $request -> goldar_Siswa;
        $model -> anak_ke = $request -> anak_ke;
        $model -> no_hp = $request -> no_hp;
        $model -> email = $request -> email;
        $model -> alamat = $request -> alamat;
        $model -> no_kk = $request -> no_kk;
        //$model -> nik_wali = $request -> nik_wali;
        $model -> save();

        return redirect('siswa')
        -> with('succes','data berhasil ditambahkan');
    }

    //mengedit data
    public function edit($nisn)
    {
        $keluarga = siswa::find($nisn);
        return view('siswa.edit', compact('siswa'));
    }

    //mengupdate data
    public function update(SiswaRequest $request, $nisn)
    {
        $siswa = siswa::find($nisn);
        $siswa -> nisn = $request -> nisn;
        $siswa -> no_absen = $request -> no_absen;
        $siswa -> nama_siswa = $request -> nama_siswa;
        $siswa -> id_kelas = $request -> id_kelas;
        $siswa -> kota_lahir = $request -> kota_lahir;
        $siswa -> tgtl_lahir = $request -> tgl_lahir;
        $siswa -> agama_siswa = $request -> agama_siswa;
        $siswa -> jk_siswa = $request -> jk_siswa;
        $siswa -> goldar_siswa = $request -> goldar_Siswa;
        $siswa -> anak_ke = $request -> anak_ke;
        $siswa -> no_hp = $request -> no_hp;
        $siswa -> email = $request -> email;
        $siswa -> alamat = $request -> alamat;
        $siswa -> no_kk = $request -> no_kk;
        $siswa -> nik_wali = $request -> nik_wali;
        $siswa -> save();
        
        return redirect()->route('siswa.index');
    }

    //menghapus data
    public function destroy(siswa $siswa)
    {
        siswa::destroy($siswa->nisn);
        return redirect()->route('siswa.index');
    }

    //searching data
    public function show($id)
    {
        //
    }
}
