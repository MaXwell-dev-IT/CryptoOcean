<?php

namespace App\Http\Controllers;

use App\Models\AppDownload;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function trackAppDownload(Request $request)
    {
        $ipAddress = $request->ip();

        // تسجيل الحدث في جدول التحميل
        AppDownload::create([
            'ip_address' => $ipAddress,
        ]);

        return response()->json(['success' => true]);
    
    }
}
