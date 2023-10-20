<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppDownload extends Model
{
    use HasFactory;
    protected $table = 'app_downloads';

    protected $fillable = [
        'ip_address',
        // يمكنك إضافة أي حقول إضافية تحتاجها
    ];
}
