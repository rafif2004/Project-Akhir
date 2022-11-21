<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wali_kelas extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function wali_kelas()
    {
        return $this->hasOne(wali_kelas::class, 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
