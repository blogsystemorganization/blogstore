<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }

    public function scopeFilter($query,$filters){
        $query->when($filters['search-category'] ?? null , function($query) use($filters){
            $query->where('name','LIKE', '%'.$filters['search-category'].'%');
        });
    }
}
