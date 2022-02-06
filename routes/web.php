<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SubPageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\frontend\FrontendController;



// use Illuminate\Http\Request;
// use App\Mail\ResetPasswordMail;
// use Illuminate\Support\Facades\Mail;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', 'frontend/FrontendController@displayheading');
Route::get('/',[FrontendController::class,'displayheading']);
Route::get('/page/{id}',[FrontendController::class,'selectPageDetailsFromTable']);

//Route::get('/',[SubPageController::class,'addsubPage']);
//  Route::get('/', function()
//  {
//     return view('frontend.index');
//  });
Route::get('/page', function()
{
   return view('frontend.page');
});


Route::get('/itemlisting/{id}', function()
{
   return view('frontend.itemlisting');
});


Route::get('/about', function()
{
return view('frontend.about');
});
Route::get('/services', function()
{
   return view('frontend.services');
});

Route::get('/contact', function()
{
   return view('frontend.contact');
});





//end of frontend part

Route::middleware(['auth'])->get('/dashboard', function()
{
   return view('dashboard.dashboard');
})->name('dashboard');


Route::middleware(['auth'])->get('/add-heading', function()
{
   return view('heading.add_headings');
})->name('site-heading');

// group middleware 

Route::middleware(['auth'])->group(function () {
   
//page heading
Route::get('/add-pages',[PageController::class,'addPage']);
Route::post('/add-pages',[PageController::class,'PageStore'])->name('page.store');
Route::get('/all-pages',[PageController::class,'pages']);
Route::get('/edit-page/{id}',[PageController::class,'editpages']);
Route::post('/update-pages',[PageController::class,'updatePage'])->name('page.update');
Route::get('/delete-page/{id}',[PageController::class,'deletePage']);


//sub-pages
Route::get('/add-sub-pages',[SubPageController::class,'addsubPage']);
Route::post('/add-sub-pages',[SubPageController::class,'subPageStore'])->name('sub-page.store');
Route::get('/all-sub-pages',[SubPageController::class,'subpages']);
Route::get('//edit-subpages/{id}',[SubPageController::class,'editSubPages']);
Route::post('/update-sub-pages',[SubPageController::class,'updateSubPage'])->name('subpage.update');

Route::get('/delete-sub-page/{id}',[SubPageController::class,'deletesubPage']);
//  sub page image upload
Route::post('editor/image_upload',[SubPageController::class,'upload'])->name('upload');

Route::get('/add-images',[ImageController::class,'addImages']);
Route::post('/add-images',[ImageController::class,'ImageStore'])->name('image.store');
Route::get('/all-images',[ImageController::class,'images']);
Route::get('/edit-images/{id}',[ImageController::class,'editImages']);
Route::post('/update-image',[ImageController::class,'updateImage'])->name('image.update');
Route::get('/delete-image/{id}',[ImageController::class,'deleteimage']);
});
















