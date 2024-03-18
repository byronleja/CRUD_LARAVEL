<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function autor(){
        return $this->hasOne(Author::class,'id','author_id')->select('id','name');
    }

    public function category(){
        return $this->hasOne(Category::class,'id','category_id')->select('id','name');
    }
    
}
