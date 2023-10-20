<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
         // استخراج عنوان IP الزائر
         $ipAddress = $request->ip();

         // التحقق من أن الزائر يقوم بزيارة الصفحة الرئيسية
         if ($request->is('/')) {
             // إنشاء سجل جديد للزائر
             Visitor::create([
                 'ip_address' => $ipAddress,
                 'visit_time' => now(),
             ]);
         }
 
         return $next($request);
     
    }
}
