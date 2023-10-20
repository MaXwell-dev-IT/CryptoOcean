<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\About;
use App\Models\Guide;
use App\Models\Learn;
use App\Models\Slider;
use App\Models\Mission;
use App\Models\Visitor;
use App\Models\Articles;
use App\Models\AppDownload;
use Illuminate\Http\Request;
use App\Models\CryptoInformation;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'user') {
                $slider1 = Slider::first();
                $slider = Slider::where('id' , '!=', $slider1->id)->get();
                $registeredUsersCount = User::countRegisteredUsers();
                $visitorsCount = Visitor::countVisitors();
                $downloadCount = AppDownload::count();
                $about = About::first();
                $info = CryptoInformation::first();
                $article = Articles::all();
                $guide = Guide::all();
                $learn = Learn::all();
                $mission = Mission::all();
                return view('user.home' , compact('article' , 'guide' , 'learn', 'mission' ,'info' , 'slider' , 'slider1' ,  'registeredUsersCount', 'visitorsCount' , 'downloadCount' , 'about'));
            }   else   if ($usertype == 'company') {
                $slider1 = Slider::first();
                $slider = Slider::where('id' , '!=', $slider1->id)->get();
                $registeredUsersCount = User::countRegisteredUsers();
                $visitorsCount = Visitor::countVisitors();
                $downloadCount = AppDownload::count();
                $about = About::first();
                $info = CryptoInformation::first();
                $article = Articles::all();
                $guide = Guide::all();
                $learn = Learn::all();
                $mission = Mission::all();
                return view('company.home' , compact('article' , 'guide' , 'learn', 'mission' ,'info' , 'slider' , 'slider1' ,  'registeredUsersCount', 'visitorsCount' , 'downloadCount' , 'about'));
            }
            else   if ($usertype == 'admin') {
              $user = User::where('id' , '!=' , Auth::user()->id)->get();
              $registeredUsersCount = User::countRegisteredUsers();
              $visitorsCount = Visitor::countVisitors();
              $downloadCount = AppDownload::count();
                return view('admin.hom' ,   compact( 'user' , 'registeredUsersCount', 'downloadCount' , 'visitorsCount' ));
            }

        }

     
    }

    public function detailsArticle($slug) {                 
         $info = CryptoInformation::first();
        if($article = Articles::where('slug' , $slug)->exists()){
            $article = Articles::where('slug' , $slug)->first();
            return view('article' , compact('article'  , 'info' ));   
        }
        else{
            return redirect('/')-> with('status', 'slug does not existss');
        }
    }

    public function detailsMission($slug) {                 
        $info = CryptoInformation::first();
       if($mission = Mission::where('slug' , $slug)->exists()){
           $mission = Mission::where('slug' , $slug)->first();
           return view('mission' , compact('mission'  , 'info' ));   
       }
       else{
           return redirect('/')-> with('status', 'slug does not existss');
       }
   }
   public function detailsGuide($slug) {                 
    $info = CryptoInformation::first();
   if($guide = Guide::where('slug' , $slug)->exists()){
       $guide = Guide::where('slug' , $slug)->first();
       return view('guide' , compact('guide'  , 'info' ));   
   }
   else{
       return redirect('/')-> with('status', 'slug does not existss');
   }
}
}
