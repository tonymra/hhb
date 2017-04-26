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



//Website Routes


Route::get('/', function () {

    $pagetitle="Welcome";
    return view('welcome',compact('pagetitle'));
});

Route::get('/about/janette', function () {

    $pagetitle="Janette Erasmus";
    return view('about-janette',compact('pagetitle'));
});

Route::get('/about/baby-massage', function () {

    $pagetitle="Baby Massage";
    return view('about-baby-massage',compact('pagetitle'));
});

Route::get('/about/baby-yoga', function () {

    $pagetitle="Baby Yoga";
    return view('about-baby-yoga',compact('pagetitle'));
});

Route::get('/booking', function () {

    $pagetitle="Make a booking";
    return view('booking',compact('pagetitle'));
});

Route::post('/enquiry','WebsiteLeadsController@store');




//Admin Routes

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');


//Check if user is Admin

Route::group(['middleware'=>'admin'],function(){


    Route::get('/admin',function(){

        $pagetitle = "Admin";
        return view('admin.home',compact('pagetitle'));
    });

    Route::get('/home', 'AdminHomeController@index');

    Route::resource('/admin/leads', 'AdminLeadsController',['names'=>[

        'index'=>'admin.leads.index',
        'create'=>'admin.leads.create',
        'store'=>'admin.leads.store',
        'edit'=>'admin.leads.edit',
        'show'=>'admin.leads.show',
        'destroy'=>'admin.leads.destroy'


    ]]);


});
