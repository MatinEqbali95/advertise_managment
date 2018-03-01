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
use Illuminate\Support\Facades\Storage;


//Route::get('/', function () {
//    \App\User::create([
//        'fname'=>'matin','lname'=>'eqbali','email'=>'matin.eqbali74@gmail.com','tel'=>'09367683492',
//        'city'=>'qazvin','username'=>'matineqbali','password'=>bcrypt('matin12345')
//    ]);
//    session(['key' => 'matin']);
//    $value = session('key');
//    return $value;

//    return view('landing');
//    return 'hello world';
//    $fileContents="mohsheeen";
//    Storage::put('avatars/1.txt', $fileContents);
//    $contents = Storage::get('avatars/1.txt');
//return $contents;
//    Storage::delete('avatars/1.txt');

//});


Route::get('/','HomeController@index');
Route::post('/search','HomeController@search')->name('search');
Route::get('/show/{id}','HomeController@show')->name('show');




Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>['auth:web','checkAdmin']],function (){
    $this->get('/panel','AdminController@index')->name('admin.panel');
    $this->resource('/categories','CategoryController');
    $this->resource('/subcategories','SubCategoryController');
    $this->resource('/propagation','PropagationController');
    $this->get('/adminInfo','AdminController@adminInfo')->name('adminInfo');
    $this->post('/updateAdminInfo','AdminController@updateAdminInfo')->name('updateAdminInfo');
    $this->get('/acceptedPropagation','AdminController@acceptedPropagation')->name('acceptedPropagation');
    $this->get('/notAcceptedPropagation','AdminController@notAcceptedPropagation')->name('notAcceptedPropagation');
    $this->PATCH('/notAcceptedPropagation/accept/{id}','AdminController@accept')->name('accept');
    $this->get('/userManagement','AdminController@userManagement')->name('userManagement');
    $this->delete('/userManagement/delete/{user}','AdminController@deleteUser')->name('user.destroy');
    $this->get('/infoSiteManagement','AdminController@infoSiteManagement')->name('infoSiteManagement');
    $this->post('/updateInfoSite','AdminController@updateInfoSite')->name('updateInfoSite');

});


Route::group(['prefix'=>'user','namespace'=>'User','middleware'=>['auth:web','checkUser']],function (){
   $this->get('/panel','UserController@index')->name('user.panel');
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



