<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    protected $fillable = [
        'en_name',
        'ar_name',
        'image_major',
        'en_desciption',
        'ar_desciption',
        'en_writer',
        'ar_writer',
        'slug'
    ];

    public function images(){
        return $this -> hasMany(image::class , 'article_id' );

    }
}
