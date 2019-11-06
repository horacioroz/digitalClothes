<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        //{{-- $users = DB::table('users')->get(); --}}


        $title = 'Listado de Usuarios';

        return view('users_list')->with('users', User::all())->with('title', 'Listado de usuarios') ;
        //return view('users_list', compact('title',  'users'));
    }
    public function userProfile($id){
         $user = User::all();
         $user = User::findOrFail($id);

        //  return $user->user;
        return view('user_profile')->with('user', $user) ;
    }
    public function logout() {
        // Session::flush();
        // return Redirect::to('home');
        Auth::logout();
        return redirect('/home');
    }
}
