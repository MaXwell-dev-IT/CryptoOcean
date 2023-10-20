<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;
    protected $fillable = [
        'en_name',
        'ar_name',
        'image_major',
        'en_glance',
        'ar_glance',
        'en_registration_mechanism',
        'ar_registration_mechanism',
        'en_win_mechanism',
        'ar_win_mechanism',
        'tele1',
        'tele2',
        'tele3',
        'tele4',
        'twitter',
        'link',
        'discord',
        'slug'
    ];
}
