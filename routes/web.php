<?php

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

Route::get('/', function () {
//    \App\User::create([
//        'fname'=>'matin','lname'=>'eqbali','email'=>'matin.eqbali74@gmail.com','tel'=>'09367683492',
//        'city'=>'qazvin','username'=>'matineqbali','password'=>bcrypt('matin12345')
//    ]);
//    session(['key' => 'matin']);
//    $value = session('key');
//    return $value;


    return 'hello world';
});

Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>['auth:web','checkAdmin']],function (){
    $this->get('/panel','AdminController@index');
    $this->resource('/categories','CategoryController');
    $this->resource('/subcategories','SubCategoryController');
    $this->resource('/propagation','PropagationController');
    $this->get('/adminInfo','AdminController@adminInfo')->name('adminInfo');
    $this->post('/updateAdminInfo','AdminController@updateAdminInfo')->name('updateAdminInfo');

});


Route::group(['prefix'=>'user','namespace'=>'User','middleware'=>['auth:web','checkUser']],function (){
   $this->get('/panel','UserController@index');
   $this->resource('/user_propagation','PropagationController');
   $this->get('/userInfo','UserController@userInfo')->name('userInfo');
   $this->post('/updateUserInfo','UserController@updateUserInfo')->name('updateUserInfo');
});



Route::group(['namespace'=>'Auth'],function (){

    // Authentication Routes...
    $this->get('login', 'LoginController@showLoginForm')->name('login');
    $this->post('login', 'LoginController@login');
    $this->get('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    $this->get('register', 'RegisterController@showRegistrationForm')->name('register');
    $this->post('register', 'RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $this->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('password/reset', 'ResetPasswordController@reset');

});



