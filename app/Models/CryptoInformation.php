<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptoInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'ar_about',
        'en_about',
        'email1',
        'email2',
        'phone1',
        'phone2',
        'twitter1',
        'twitter2',
        'telegram1',
        'telegram2',
        'telegram3',
        'youtube',
        'logo',
        'en_name',
        'ar_name'
    ];
}
