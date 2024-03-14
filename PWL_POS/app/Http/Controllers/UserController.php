<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Praktikum 1
    // public function index()
    // {
    //   $data =[
    //     'level_id' => 2,
    //     'username' => 'manager_tiga',
    //     'nama' => 'Manager 3',
    //     'password' => Hash::make('12345')
    //   ];
    //   UserModel::create($data);


    //     $user = UserModel::all();
    //     return view('user', ['data' => $user]);
    // }

                                  //Praktikum 2.1
    //langkah 1
    // public function index(){
    //   $user = UserModel::find(1);
    //   return view('user', ['data' => $user]);
    // }
    
    //langkah 4
    // public function index(){
    //   $user = UserModel::where('level_id', 1)->first();
    //   return view('user', ['data' => $user]);
    // }

    //langkah 6
    // public function index(){
    //   $user = UserModel::firstwhere('level_id', 1);
    //   return view('user', ['data' => $user]);
    // }

    //langkah 8
    // public function index(){
    //   $user = UserModel::findOr(1, ['username', 'nama'], function(){
    //     abort(404);
    //   });
    //   return view('user', ['data' => $user]);
    // }

    //langkah 10
    // public function index(){
    //   $user = UserModel::findOr(20, ['username', 'nama'], function(){
    //     abort(404);
    //   });
    //   return view('user', ['data' => $user]);
    // }

                                  //Praktikum 2.2
    //langkah 1
    // public function index(){
    //     $user = UserModel::findOrFail(1);
    //     return view('user', ['data' => $user]);
    // }

    //langkah 3
    public function index(){
        $user = UserModel::where('username', 'manager9')->firstOrFail();
        return view('user', ['data' => $user]);
    }
}