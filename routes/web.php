<?php

use Monocubed\Calc\Facades\Calc;

use Illuminate\Support\Facades\Route;
use Sevenspan\Bunny\Bunny;

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


Route::get('/new', function() {

  $add =   Calc::add(2, 3);
  $sub =   Calc::subtract(2, 3);
  $multiplication =   Calc::multiplication(2, 3);
  $divison =   Calc::division(2, 3);
  echo $divison;

});


// Route::get('bunnypackagetest', function(){
//   $media_url = 'builditindialogo.jpg';
//  return Bunny::generateToken($media_url);

// });


Route::get('generateUrl', function(){
  
  $media_url = 'builditindialogo.jpg';

  return Bunny::generatePrivateImageUrl($media_url);
});


Route::get('/', function () {
    return view('welcome');
});
