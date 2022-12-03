<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bacaan extends Model
{
    use HasFactory;  
    protected $guarded = ['id'];
    protected $table = 'bacaan';
    
    public function siswa()
    {
        return $this->belongsTo(siswa::class, 'id_siswa');
    }
}
