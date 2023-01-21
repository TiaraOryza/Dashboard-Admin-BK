<?php

namespace App\Models;

use App\Models\kelas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $table='kelas';
    protected $primaryKey = 'id_kelas';
    protected $fillable = [
        'id_kelas', 
        'wali_kelas'
    ];
    
    public function kelas()
    {
        return $this->belongsTo(siswa::class);
        return $this->hasMany(siswa::class);
    
    } 
    
}