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
    // public function index(){
    //     $user = UserModel::where('username', 'manager9')->firstOrFail();
    //     return view('user', ['data' => $user]);
    // }

                                  //Praktikum 2.3
    //langkah 1
    // public function index(){
    //     $user = UserModel::where('level_id', 2)->count();
    //     // dd($user);
    //     return view('user', ['data' => $user]);
    // }

                                  //Praktikum 2.4
        //langkah 1
        // public function index(){
        // $user = UserModel::firstOrCreate(
        //     ['username' => 'manager',
        //     'nama' => 'Manager',],
        // );
        // return view('user', ['data' => $user]);

        //langkah 4
        // public function index(){
        //     $user = UserModel::firstOrCreate(
        //         ['username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //         ],
        //     );
        //     return view('user', ['data' => $user]);
        // }

        //langkah 6
        // public function index(){
        //     $user = UserModel::firstOrNew(
        //         ['username' => 'manager',
        //         'nama' => 'Manager',
        //         ],
        //     );
        //     return view('user', ['data' => $user]);
        // }

        //langkah 8
        // public function index(){
        //     $user = UserModel::firstOrNew(
        //         ['username' => 'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //         ],
        //     );
        //     return view('user', ['data' => $user]);
        // }

        //langkah 10
        // public function index(){
        //     $user = UserModel::firstOrNew(
        //         ['username' => 'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //         ],
        //     );
        //     $user->save();

        //     return view('user', ['data' => $user]);
        // }

                                          //Praktikum 2.5
        //langkah 1
        // public function index(){
        //     $user = UserModel::create([
        //         'username' => 'manager55',
        //         'nama' => 'Manager55',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        //     ]);
        //     $user->username = 'manager56';
        
        // $user->isDirty(); //true
        // $user->isDirty('username'); //true
        // $user->isDirty('nama'); //false
        // $user->isDirty(['nama', 'username']); //true

        // $user->isClean(); //false
        // $user->isClean('username'); //false
        // $user->isClean('nama'); //true
        // $user->isClean(['nama', 'username']); //false

        // $user->save();

        // $user->isDirty(); //false
        // $user->isClean(); //true
        // dd($user->isDirty());

        // }

        //langkah 2
        public function index(){
            $user = UserModel::create([
                'username' => 'manager11',
                'nama' => 'Manager11',
                'password' => Hash::make('12345'),
                'level_id' => 2,
            ]);
            $user->username = 'manager12';
        
        $user->save();
        
        $user->wasChanged(); //true
        $user->wasChanged('username'); //true
        $user->wasChanged('nama'); //false
        $user->wasChanged(['nama', 'username']); //true
        dd($user->wasChanged(['nama', 'username'])); //true
        }
        
}