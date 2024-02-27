<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    // a comment belongsto a blog
    // a blog hasMany comment

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    // a user hasMany comments
    // a comment belongto a user

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
