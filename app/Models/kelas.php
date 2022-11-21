<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kelas()
    {
        return $this->hasOne(kelas::class, 'id');
    }
    public function  wali_kelas()
    {
        return $this->belongsTo(wali_kelas::class, 'id_guru');
    }
}