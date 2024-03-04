<?php


use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Monolog\Level;

Route::get('/level',[LevelController::class,'index']);

Route::get('/Kategori',[KategoriController::class,'index']);

Route::get('/user',[UserController::class,'index']);


   
