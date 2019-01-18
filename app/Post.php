<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'decs', 'content', 'image', 'id_user'];


    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    protected $casts = [
        'image' => 'array'];
}
