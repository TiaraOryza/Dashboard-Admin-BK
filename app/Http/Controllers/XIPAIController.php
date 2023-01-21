<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\keluarga;
use App\Models\kelas;
use App\Models\wali;
use App\Http\Requests\SiswaRequest;
use Illuminate\Support\Facades\DB;

class XIPAIController extends Controller
{
    public function index()
    {
        // $siswa_x = siswa::select('nisn','no_absen','jk_siswa','nama_siswa','id_kelas')->where('id_kelas','10IPA1')->get();
        


        $siswa_x = DB::table('siswa')->where('nama_siswa', 'Tiara')->value('id_kelas');

        return view('X_IPA_I.index', compact('siswa_x'));
        //$dump('email');
    }

}
