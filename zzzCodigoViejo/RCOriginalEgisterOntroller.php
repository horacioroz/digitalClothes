<?php

// namespace App\Http\Controllers\Auth;

// use App\User;
// use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Foundation\Auth\RegistersUsers;

// class RegisterController extends Controller
// {
//     /*
//     |--------------------------------------------------------------------------
//     | Register Controller
//     |--------------------------------------------------------------------------
//     |
//     | This controller handles the registration of new users as well as their
//     | validation and creation. By default this controller uses a trait to
//     | provide this functionality without requiring any additional code.
//     |
//     */

//     use RegistersUsers;

//     /**
//      * Where to redirect users after registration.
//      *
//      * @var string
//      */
//     protected $redirectTo = '/home';

//     /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware('guest');
//     }

//     /**
//      * Get a validator for an incoming registration request.
//      *
//      * @param  array  $data
//      * @return \Illuminate\Contracts\Validation\Validator
//      */
//     protected function validator(array $data)
//     {
//         return Validator::make($data, [
//             'firsName' => ['required', 'string', 'max:255'],
//             'lasName' => ['required', 'string', 'max:255'],
//             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//             'password' => ['required', 'string', 'min:8', 'confirmed'],
//         ]);
//     }

//     /**
//      * Create a new user instance after a valid registration.
//      *
//      * @param  array  $data
//      * @return \App\User
//      */
//     protected function create(array $data)
//     {
//         return User::create([
//             'firstName' => $data['firstName'],
//             'lastName' => $data['lastName'],
//             'email' => $data['email'],
//             'password' => Hash::make($data['password']),
//         ]);
//     }
// }
//
//
// ---------------- ACÁ TERMINA EL REGISTER CONTROLLER ORIGINAL ---------------------------------
//
//
//     protected function store(Request $request)
//     {
//         $this->validate(request(), [
//             'firstName' => 'required',
//             'lastName' => 'required',
//             'email' => 'required|email',
//             'password' => 'required|min:8|confirmed'
//         ]);

//         $user = new User;
//         $user->firstName = request()->firstName;
//         $user->lastName = request()->lastName;
//         $user->email = request()->email;
//         $user->email_verified_at = request()->email_verified_at;
//         $user->password = encrypt(request()->password);
//         $user->_token = request()->_token;
//         $user->save();


//         $user = User::create(request(['firstName', 'lastName', 'email', 'password']));

//         auth()->login($user);

//         return redirect()->to('/home');
//     }
// }

// public function show(){
//         return view('register');
// }
