<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return "aaa";
// });

// Route::get('/clear', function () {
//     $exitCode = Artisan::call('cache:clear');
//     // return what you want
// });
// User


Route::get('/', 'userController@index');
Route::get('/about', 'userController@about');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/singleservice/{id}', 'userController@service')->name('home');
// Route::post('/userenquiry', 'enquiryController@store');
// Route::get('/projects', 'userController@projects')->name('');
// Route::get('/userblog', 'userController@userblog')->name('userblog');
Route::get('/singleblog/{id}', 'userController@singleblog');
// Route::get('/userservices', 'userController@userservices')->name('');
Route::get('/contact', 'userController@usercontact')->name('usercontact');
Route::get('/user-products', 'userController@userproducts')->name('userproducts');
Route::get('/productbycat/{id}', 'userController@productbycat');





Route::get('/gallery', 'userController@usergallery');
Route::get('/products', 'userController@userproducts');
Route::get('/single-product/{id}', 'userController@usersingleproduct');






// Route::get('/singleservice', 'userController@singleservices');
Route::get('/listbycategory/{id}', 'userController@listbycategory');


// Route::get('/show-user', 'userController@projectsingle')->name('projectsingle');
Route::post('homeenqsave', 'homeenqController@store');

// Ajax Calling of project
Route::get('productbylistindexpage/{id}', 'userController@projectsingle')->name('users.show');
Route::get('/locations/{id}', 'userController@locations');

Route::get('homeproject/{id}', 'userController@homeproject');




// Admin Section

Route::resource('mainservice', 'mainserviceController');
Route::resource('servicesslide', 'serviceslideController');

Route::resource('bannerenquiry', 'homeenqController');
Route::resource('banner', 'bannerController');
Route::resource('packagecategory', 'packagecategoryController');
Route::resource('project', 'packageController');
Route::resource('offer', 'offerController');
Route::resource('blogs', 'blogController');
// Route::resource('services', 'serviceController');
Route::resource('country', 'countryController');
Route::resource('places', 'placeController');
Route::resource('homeservices', 'homeserviceController');
Route::resource('says', 'sayController');
Route::resource('service1', 'eventsController');
// Route::resource('service', 'serviceController');
Route::resource('serviceimages', 'serviceimagesController');
Route::resource('enquiry', 'enquiryController');
Route::resource('team', 'teamController');
Route::resource('subservice', 'subserviceController');




Route::get('/virtual', 'userController@virtual');


Route::group(['middleware' => 'auth'], function () {
    
Route::resource('services', 'serviceController');
Route::resource('enquiry', 'enquiryController');

});




// Example named route in web.php
Route::post('enquirystore', 'enquiryController@store');



// Route::resource('category', 'categoryController');
// Route::resource('video', 'videoController');
// Route::resource('products', ProductController::class);
