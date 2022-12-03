<?php



use Illuminate\Support\Facades\Route;
use Minhazulmin\Contact\Http\Controllers\ContactController;

Route::group(['namespace' => 'Minhazulmin\Contact\Http\Controllers'],function(){
   Route::get( 'contact', [ContactController::class,'index'] )->name( 'contact' );
   Route::post('contact', [ContactController::class,'send']);
 
});

