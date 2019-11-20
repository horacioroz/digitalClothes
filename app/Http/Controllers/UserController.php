<?php

namespace App\Http\Controllers;

use Auth;
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
        return view('user_profile')->with('user', $user) ;
    }

    public function logout() {
        // dd('Hasta acá llegué');
        // Session::flush();
        // return Redirect::to('home');
        Auth::logout();
        return redirect()->to('/home');
        //return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/home');
    }

    public function userEdit(User $id){
         $users = User::all();
         $user = User::findOrFail($id);
           //dd($user);
        //  return $user->user;
        return view('user_profile_edit')->with('user', $id) ;
    }

    public function userUpdate( Request $request){
        //dd($request->all());
        //$users = User::all();
        $user = User::findOrFail($request->id);
        //$user = new User;
        //$user = $request;
        //$user->fill($request->all());
        //dd($id);
        $user->update($request->all());
        //dd('llegue');

        return redirect()->route('profile', $user->id);
    }

}
