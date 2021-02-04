<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relación uno a muchos  (inversa)

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    //Relación uno a uno polimorfica
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }

    //Relación uno a muchos polimorfica

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

}
