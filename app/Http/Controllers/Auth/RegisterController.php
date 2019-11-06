<?php


namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
//use Illuminate\Http\View;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    use RegistersUsers;
    /**
         * Where to redirect users after registration.
         *
         * @var string
         */
        protected $redirectTo = '/home';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


protected $request;

// public function __construct(Request $request){
//   $this->request = $request;
// }

public function signup(Request $request) {
        //echo "Está en singup";
//exit;

    $request->all(); //trae los datos del formulario
//echo $request;
//exit;
    $this->validate($request,
        ['firstName'=>'required',
        'lastName'=>'required',
        'email' =>'required | email:filter',
        'password' => 'required | min:8|confirmed',
        'password_confirmation' => 'required | min:8'
        ],[
        'firstName.required'=>'Debe ingresar el Nombre',
        'lastName.required'=>'Debe ingresar el Alpellido',
        'email.required'=>'Debe ingresar un email',
        'email.email'=>'El email debe ser válido',
        'password.required'=>'Debe ingresar una contraseña',
        'password.min:8'=>'La contraseña debe tener al menos 8 caracteres',
        'password_confirmation.required'=>'Debe repetir la contraseña',
        'password_confirmation.min:8'=>'Debe tener al menos 8 caracteres'
        ]
     );
    return $request;

      /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
}
      // function create($request)
      //   {
      //       return User::create([
      //           'firstName' => $request['firstName'],
      //           'lastName' => $request['lastName'],
      //           'email' => $request['email'],
      //           'password' => Hash::make($request['password']),
      //       ]);
      //       $user->save();
      //   }
      function store()
        {
            $user = new User;
            $user->firstName = request()->firstName;
            $user->lastName = request()->lastName;
            $user->email = request()->email;
            $user->email_verified_at = request()->email_verified_at;
            $user->password = \Hash::make(request()->password);
            //$user->_token = request()->_token;
            $user->save();

            return redirect('/login');
        }


 }
