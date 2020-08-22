<?php

use Illuminate\Support\Facades\Route;

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





//success & error
Route::get('/error', function () {
    return view('error/error-404');
});
Route::get('/success','CheckOutController@paymentPaypal');
Route::get('/banking-success','CheckOutController@paymentBanking');


Route::get('/create-success',function (){
    return view('success/blog-success');
});

//Login-register
Route::resource('/register','AccountController');
Route::get('/login','LoginController@login');
Route::post('/login','LoginController@processLogin');
Route::get('/contact', function () {return view('user/contact-us');});
Route::get('/logout-admin', 'LoginController@logOutAdmin');
Route::get('/logout-user', 'LoginController@logOutUser');



//Rote user
Route::resource('/hotels','ViewBookingHotelController');
Route::get('/add','ViewBookingHotelController@addCart');
Route::get('/add-one','ViewBookingHotelController@addOneCart');
Route::get('/',function (){
    return view('user/home')->with('hotels',\App\Hotel::all());
});
Route::get('/about-us',function (){
    return view('user/about-us');
});
Route::get('/q&a',function (){
    return view('user/q&a');
});
Route::get('/policy',function (){
    return view('user/policy');
});
Route::get('/blogs','BlogController@userList');
Route::get('/blog/{id}','BlogController@showBlog');
Route::get('/room/{id}','ViewBookingHotelController@showView');
Route::get('/create-blog','UserCreateBlog@userCreate');
Route::post('/store-blog','UserCreateBlog@userStore');

//Route check-out
Route::middleware(['user.middleware'])->group(function (){
    Route::resource('/check-out','CheckOutController');
    Route::get('/remove','CheckOutController@remove');
    Route::get('/change','CheckOutController@change');
    Route::post('/submit','CheckOutController@submitBooking');
    Route::get('/payment','CheckOutController@checkOut');
});

//Rote admin
Route::middleware(['admin.middleware'])->group(function (){
    Route::resource('/admin/hotels','HotelController');
    Route::resource('/admin/blogs','BlogController');
    Route::resource('/admin/rooms','RoomController');
    Route::get('/admin/room-type-by-hotel','RoomController@getRoomTypeByHotelId');
    Route::resource('/admin/room-types','RoomtypeController');

    Route::resource('admin/bookings','BookingController');
    Route::get('admin/booking-details','BookingController@bookingDetails');

    Route::put('/confirm/{id}','BookingController@confirm');
    Route::put('/cancel/{id}','BookingController@cancel');
    Route::resource('admin/accounts','AdminCreateAccount');
    Route::put('/change-status-blog/{id}','BlogController@updateStatus');
    Route::put('/change-status-hotel/{id}','HotelController@updateStatus');
    Route::put('/change-status-room/{id}','RoomController@updateStatus');
    Route::put('/change-status-room-type/{id}','RoomtypeController@updateStatus');
    Route::put('/change-status-account/{id}','AdminCreateAccount@updateStatus');

    Route::post('/blog-change-status-all','BlogController@updateAllStatus');
    Route::post('/hotel-change-status-all','HotelController@updateAllStatus');
    Route::post('/room-change-status-all','RoomController@updateAllStatus');
    Route::post('/room-type-change-status-all','RoomtypeController@updateAllStatus');
    Route::post('/account-change-status-all','AdminCreateAccount@updateAllStatus');

    Route::get('/admin', 'ChartController@index');
});


