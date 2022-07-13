<?php

use Illuminate\Support\Facades\Route;

/** IMPORT CONTROLLER */
use App\Http\Controllers\HomeController;


/** END */
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
    // return view(hoe)
//     // return csrf_token(); 
//     return 'Hello world';
// });

//http://localhost:8000/about;
// Route::get('/about',function(){
//     return 'About page';
// });

// Route::get('/Register',function(){
//     return 'Register page';
// });

// Route::get('/Service',function(){
//     return 'Service page';
// });


// Route::get('user/{id?}',function($id =''){
//     return 'User: '.$id;
// });

// Route::post('products',function(){
//     return 'This is my product';
// });

// Route::put('product',function(){
//     return 'Update product';
// });

// Route::delete('product',function(){
//     return 'Delete products';
// });

// Route::get('posts/{post?}/comments/{comments}',function($postID='',$commentID){
//     return 'Post: '.$postID .' comment '.$commentID;
// });

// //การใช้งาน  Expression Constraints ใน laravel

// Route::get('category/{name}',function($name){
//     return $name;
// })->where('name','[A-Za-z]+');
// Route::get('group/{id}/type/{type}',function($id,$type){
//     return $id . $type;
// })->where(['id'=>'[0-9]+','type'=>'[A-Za-z]+']);

// Route::get('showroom/profile/{name?}',function($name =null){
//     return 'Hello name';
// })->name('s')->where('name','[A-Za-z]+');

// การส่งเข้า Controller
// Route::any('',[HomeController::class, '$1']);

// การส่งเข้า Controller
Route::get('/',[HomeController::class,'home']);
Route::get('about',[HomeController::class,'about']);
Route::get('service',[HomeController::class,'service']);
Route::get('contact',[HomeController::class,'contact']);
Route::get('login',[HomeController::class,'login']);
Route::get('employee',[HomeController::class,'employees']);
Route::get('employeelist',[HomeController::class,'employees_list']);


