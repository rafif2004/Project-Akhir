<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wali_kelas extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kelas()
    {
        return $this->hasOne(kelas::class, 'id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
