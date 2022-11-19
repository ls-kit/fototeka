<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $casts = ['title' => 'array', 'description'=>'array'];
    protected $fillable = [
        'category_id',
        'title',
        'author_id',
        'description',
        'image',
        'original_date',
        'digital_date',
        'physic_description',
        'width',
        'height',
        'material'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }

    public function author(){
        return $this->belongsTo(Author::class, 'author_id','id');
    }
    public function gallery(){
        return $this->hasMany(PostGallery::class,'post_id');
    }
}
