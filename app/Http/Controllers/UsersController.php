<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        if(Auth::check()){
        
        $users=User::find($id);
        $tasks=$users->tasks()->orderBy('id','desc')->paginate(10);
        
        return view('users.index',[
            'users'=>$users,
        ]);
    }
        else{
            return view('welcome');
        }
    }
}
