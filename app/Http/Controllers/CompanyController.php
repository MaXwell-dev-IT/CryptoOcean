<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function downloadService()
    {
        $filePath = 'service/CO_services.pdf';
        if (file_exists($filePath)) {
            return response()->file($filePath);
        } else {
            // يمكنك تنفيذ الإجراء المناسب إذا لم يتم العثور على الملف
            return response()->json(['error' => 'File not found'], 404);
        }
    }

}
