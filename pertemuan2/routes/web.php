<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

Route::get('/hello', [WelcomeController::class,'hello']);


Route::get('/mahasiswa', function(){
$arrMahasiswa = ["Achmad Ridla Shobriy", "Ahmad Maulana Dani", 
                "Moh. Iqbal Fatoni", "Ilham Maulana"];
return view('politeknik.mahasiswa',['mahasiswa' => $arrMahasiswa]);
});


Route::get('/dosen', function(){
    $arrDosen = ["Pak Bagas", "Pak Dimas", "Pak Anugerah", "Pak Hendra"];
return view('politeknik.dosen',['dosen' => $arrDosen]);
});