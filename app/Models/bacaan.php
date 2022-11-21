<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bacaan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function bacaan()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
