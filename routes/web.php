<?php

use App\Models\User;
use App\Models\About;
use App\Models\Slider;
use App\Models\Visitor;
use App\Models\AppDownload;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Articles;
use App\Models\CryptoInformation;
use App\Models\Guide;
use App\Models\Learn;
use App\Models\Mission;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('setlocale/{locale}',function($lang){
    \App::setlocale($lang);
    \Session::put('locale',$lang);
    return redirect()->back();
});
Route::post('/track-app-download',  [App\Http\Controllers\Controller::class, 'trackAppDownload']);

Route::get('/', function () {
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
    return view('welcome' , compact('article' , 'guide' , 'learn', 'mission' ,'info' , 'slider' , 'slider1' ,  'registeredUsersCount', 'visitorsCount' , 'downloadCount' , 'about'));
});

Route::get('/details/article{slug}', [App\Http\Controllers\HomeController::class, 'detailsArticle'])->name('details_article');
Route::get('/details/mission{slug}', [App\Http\Controllers\HomeController::class, 'detailsMission'])->name('details_mission');
Route::get('/details/web3{slug}', [App\Http\Controllers\HomeController::class, 'detailsGuide'])->name('details_guide');


Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'verified' , 'is_block'])->name('home');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix'=>'admin', 'middleware' => ['admin' , 'auth' , 'verified' , 'is_block' ]] , function()
{
    Route::get('/block-user{id}', [App\Http\Controllers\DashboardController::class, 'blockUser']);
    Route::get('/unblock-user{id}', [App\Http\Controllers\DashboardController::class, 'unblockUser']);
    //slider
    Route::get('/slider', [App\Http\Controllers\DashboardController::class, 'showSlider'])->name('show_slider');
    Route::get('/add-slider', [App\Http\Controllers\DashboardController::class, 'addSlider'])->name('add_slider');
    Route::post('/add-slider', [App\Http\Controllers\DashboardController::class, 'storeSlider'])->name('store_slider');
    Route::get('/edit-slider{id}', [App\Http\Controllers\DashboardController::class, 'editSlider'])->name('edit_slider');
    Route::put('/edit-slider{id}', [App\Http\Controllers\DashboardController::class, 'updateSlider'])->name('update_slider');
    Route::delete('/delete-slider{id}', [App\Http\Controllers\DashboardController::class, 'deleteSlider'])->name('delete_slider');
    //about
    Route::get('/about', [App\Http\Controllers\DashboardController::class, 'showAbout'])->name('show_about');
    Route::get('/add-about', [App\Http\Controllers\DashboardController::class, 'addAbout'])->name('add_about');
    Route::post('/add-about', [App\Http\Controllers\DashboardController::class, 'storeAbout'])->name('store_about');
    Route::get('/edit-about{id}', [App\Http\Controllers\DashboardController::class, 'editAbout'])->name('edit_about');
    Route::put('/edit-about{id}', [App\Http\Controllers\DashboardController::class, 'updateAbout'])->name('update_about');
    Route::delete('/delete-about{id}', [App\Http\Controllers\DashboardController::class, 'deleteAbout'])->name('delete_about');
    //profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit.admin');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update.admin');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy.admin');
   //information
   Route::get('/info', [App\Http\Controllers\DashboardController::class, 'showInfo'])->name('show_info');
   Route::get('/add-info', [App\Http\Controllers\DashboardController::class, 'addInfo'])->name('add_info');
   Route::post('/add-info', [App\Http\Controllers\DashboardController::class, 'storeInfo'])->name('store_info');
   Route::get('/edit-info{id}', [App\Http\Controllers\DashboardController::class, 'editInfo'])->name('edit_info');
   Route::put('/edit-info{id}', [App\Http\Controllers\DashboardController::class, 'updateInfo'])->name('update_info');
    //article
    Route::get('/article', [App\Http\Controllers\DashboardController::class, 'showArticle'])->name('show_article');
    Route::get('/add-article', [App\Http\Controllers\DashboardController::class, 'addArticle'])->name('add_article');
    Route::post('/add-article', [App\Http\Controllers\DashboardController::class, 'storeArticle'])->name('store_article');
    Route::get('/edit-article{id}', [App\Http\Controllers\DashboardController::class, 'editArticle'])->name('edit_article');
    Route::put('/edit-article{id}', [App\Http\Controllers\DashboardController::class, 'updateArticle'])->name('update_article');
    Route::delete('/delete-article{id}', [App\Http\Controllers\DashboardController::class, 'deleteArticle'])->name('delete_article');
    Route::delete('/deleteimage{id}', [App\Http\Controllers\DashboardController::class, 'deleteimage'])->name('delete_image');
    //mission
    Route::get('/mission', [App\Http\Controllers\DashboardController::class, 'showMission'])->name('show_mission');
    Route::get('/add-mission', [App\Http\Controllers\DashboardController::class, 'addMission'])->name('add_mission');
    Route::post('/add-mission', [App\Http\Controllers\DashboardController::class, 'storeMission'])->name('store_mission');
    Route::get('/edit-mission{id}', [App\Http\Controllers\DashboardController::class, 'editMission'])->name('edit_mission');
    Route::put('/edit-mission{id}', [App\Http\Controllers\DashboardController::class, 'updateMission'])->name('update_mission');
    Route::delete('/delete-mission{id}', [App\Http\Controllers\DashboardController::class, 'deleteMission'])->name('delete_mission');
    //guide
    Route::get('/guide', [App\Http\Controllers\DashboardController::class, 'showGuide'])->name('show_guide');
    Route::get('/add-guide', [App\Http\Controllers\DashboardController::class, 'addGuide'])->name('add_guide');
    Route::post('/add-guide', [App\Http\Controllers\DashboardController::class, 'storeGuide'])->name('store_guide');
    Route::get('/edit-guide{id}', [App\Http\Controllers\DashboardController::class, 'editGuide'])->name('edit_guide');
    Route::put('/edit-guide{id}', [App\Http\Controllers\DashboardController::class, 'updateGuide'])->name('update_guide');
    Route::delete('/delete-guide{id}', [App\Http\Controllers\DashboardController::class, 'deleteGuide'])->name('delete_guide');
   //learn
   Route::get('/learn', [App\Http\Controllers\DashboardController::class, 'showLearn'])->name('show_learn');
   Route::get('/add-learn', [App\Http\Controllers\DashboardController::class, 'addLearn'])->name('add_learn');
   Route::post('/add-learn', [App\Http\Controllers\DashboardController::class, 'storeLearn'])->name('store_learn');
   Route::get('/edit-learn{id}', [App\Http\Controllers\DashboardController::class, 'editLearn'])->name('edit_learn');
   Route::put('/edit-learn{id}', [App\Http\Controllers\DashboardController::class, 'updateLearn'])->name('update_learn');
   Route::delete('/delete-learn{id}', [App\Http\Controllers\DashboardController::class, 'deleteLearn'])->name('delete_learn');

  }); 

  Route::group(['prefix'=>'company', 'middleware' => ['company' , 'auth' , 'verified' , 'is_block' ]] , function()
{
    Route::get('/download-service', [App\Http\Controllers\CompanyController::class, 'downloadService'])->name('download_service');

}); 
require __DIR__.'/auth.php';
