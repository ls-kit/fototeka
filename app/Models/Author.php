<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'authors';
    protected $fillable = [
        'name',
        'last_name',
        'biography',
        'email',
        'image',
        'address'
    ];
    protected $casts = ['biography'=>'array','images'=>'array'];

//    public function posts(){
//        return $this->belongsToMany(Author::class, 'author_id','id');
//    }

    public function posts(){
        return $this->hasMany(Post::class,'author_id','id');
    }
    public function gallery(){
        return $this->hasMany(AuthorGallery::class,'author_id');
    }
}
