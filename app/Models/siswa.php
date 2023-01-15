<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table  = 'siswa';
    protected $guarded = ['id'];

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'id_kelas');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function bacaan(){
        return $this->hasMany(bacaan::class, 'id');
    }
}
