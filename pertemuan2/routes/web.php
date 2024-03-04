<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;



//Routing
    //Basic Routing
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/wellcome', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'Achmad Ridla Shobriy | NIM. 2141762070';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' .$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke- '.$postId. " Komentar ke- ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

// Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/index', [PageController::class,'index']);

// Route::get('/about', [PageController::class,'about']);

// Route::get('/articles/{Id}', function($Id) {
//     return 'Halaman Artikel dengan ID : '.$Id;
// });

Route::get('/home', [HomeController::class,'home']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{Id}', function($Id) {
    return 'Halaman Artikel dengan ID : '.$Id;
});

use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);

Route::resource('photos', PhotoController::class)->except([
   'create', 'store', 'update', 'destroy'
   ]);

Route::get('/greeting', function () {
    return view('hello', ['name' => 'Achmad']);
});

Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Maulana']);
});

Route::get('/greeting', [WelcomeController::class, 'greeting']);

Route::get('/mahasiswa', function(){
$arrMahasiswa = ["Achmad Ridla Shobriy", "Ahmad Maulana Dani", 
                "Moh. Iqbal Fatoni", "Ilham Maulana"];
return view('politeknik.mahasiswa',['mahasiswa' => $arrMahasiswa]);
});


Route::get('/dosen', function(){
    $arrDosen = ["Pak Bagas", "Pak Dimas", "Pak Anugerah", "Pak Hendra"];
return view('politeknik.dosen',['dosen' => $arrDosen]);
});