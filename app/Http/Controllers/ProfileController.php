<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
   public function user(User $user)
    {
        function get_id(Request $request){
        $route = $request->route();
        $uri_path = $route->getPath();
        $uri_parts = explode('/', $uri_path);
        $uri_tail = end($uri_parts);
            return $uri_tail;
    }

        $id= get_id();
        //$id = $user->get('id')[0][($user->{'id'})->get()];
        dd($id);
        //$dato = $data->users()->where('id', $user->{'id'})->get();
        dd();
        $data = User::where('id','parameter')->get();
         dd($data);
        //return view('user_profile', compact('user'))with->;
        return view('user_profile')->with(DB::table('users')->where('id',($user->{'id'}))) ;
    }
}
