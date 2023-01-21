<?php

namespace App\Models;

use App\Models\wali;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
    use HasFactory;

    protected $table='wali';
    protected $primaryKey = 'nik_wali';
    protected $fillable = [

        'nik_wali',
        'nama_wali',
        'alamat_wali',
        'jenis_kelamin',
        'agama_wali',
        'no_hp'
        
    ];
    
    public function keluarga()
    {
        return $this->belongsTo(siswa::class);
        return $this->hasMany(siswa::class);
    } 

    public function siswa(){
        return $this->hasMany(siswa::class);

    }
    
}