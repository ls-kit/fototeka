<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reportage extends Model
{
    use HasFactory;
    protected $casts = ['name'=>'array','description'=>'array'];

    public function gallery(){
        return $this->hasMany(Reportage_gallery::class,'reportage_id');
    }
}
