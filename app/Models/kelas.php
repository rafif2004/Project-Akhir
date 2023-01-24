<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function siswa()
    {
        return $this->hasMany(siswa::class, 'id');
    }
    public function  wali_kelas()
    {
        return $this->hasOne(wali_kelas::class, 'id');
    }
    public function bacaan(){
        return $this->hasMany(bacaan::class, 'id');
    }

}
