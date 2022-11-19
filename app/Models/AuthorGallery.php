<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorGallery extends Model
{
    use HasFactory;
    protected $casts = ['meta_data'=>'array'];
}
