<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //Relación uno a muhos inversa

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    //Relación polimorfica
    public function commentable()
    {
        return $this->morphTo();
    }
}
