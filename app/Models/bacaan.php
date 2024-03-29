<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bacaan extends Model
{
    use HasFactory;  
    protected $guarded = ['id'];
    protected $table = 'bacaan';
    protected $with = ['siswa'];
    
    public function siswa()
    {
        return $this->belongsTo(siswa::class, 'id_siswa');
    }
    public function kntl(){
        return $this->belongsTo(kelas::class, 'id_kelas');
    }
}
