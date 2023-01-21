<?php

namespace App\Models;

use App\Models\keluarga;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keluarga extends Model
{
    use HasFactory;

    protected $table='keluarga';
    protected $primaryKey = 'no_kk';
    protected $fillable = 
    [
        'no_kk', 
        'nama_ayah',
        'nama_ibu',
        'agama_ayah',
        'agama_ibu',
        'nik_ayah',
        'nik_ibu',
        'alamat',
        'no_hp',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'gaji_ayah',
        'gaji_ibu'
       
    ];
    
    public function keluarga()
    {
        return $this->belongsTo(siswa::class);
    } 
    
}