<?php

namespace App\Models;

use App\Models\foto_data_siswa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foto_data_siswa extends Model
{
    use HasFactory;

    protected $table='foto_data_siswa';
    protected $primaryKey = 'nisn';
    protected $fillable = [
        'nisn', 
        'nama_siswa',
        'foto_diri',
        'foto_kk',
        'foto_ktp',
        'foto_ijazah',
        'foto_keluarga',
        'foto_akta'
    
    ];
    
    public function foto_data_siswa()
    {
        //return $this->belongsTo(foto_data_siswa::class);
    } 
    
}