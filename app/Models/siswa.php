<?php

namespace App\Models;

use App\Models\siswa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table='siswa';
    protected $primaryKey = 'nisn';
    protected $fillable = [
        'nisn', 
        'no_absen',
        'nama_siswa',
        'id_kelas',
        'kota_lahir',
        'tgl_lahir',
        'agama_siswa',
        'jk_siswa',
        'goldar_siswa',
        'anak_ke',
        'no_hp',
        'email',
        'alamat',
        'no_kk',
        'nik_wali'
    ];
    
    public function siswa()
    {
        return $this->hasOne(kelas::class);
        return $this->hasOne(keluarga::class);
        return $this->hasOne(wali::class);
    } 

    public function wali(){
        return $this->belongsTo(wali::class);

    }
    
}