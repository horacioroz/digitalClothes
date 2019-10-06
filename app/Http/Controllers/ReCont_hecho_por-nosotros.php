<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\View;

class RegisterController extends Controller
{

protected $request;

// public function __construct(Request $request){
//   $this->request = $request;
// }

public function signup(Request $request) {

    $request->all(); //trae los datos del formulario

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
}



 protected function create($request)
    {
        return User::create([
            'firstName' => $request['firstName'],
            'lastName' => $request['lastName'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
    }

    public function store(){
        return 'Hola';
    }


// public function show(){
//         return view('register');
// }


//     public function validar(Request $datos) {
//         dd($datos);
//         $nombre = trim ($datos["firstName"]);
//         if (empty($nombre)) {
//             $errores ["firstName"]  = "Debe ingresar su nombre" ;
//         }
//         $nombre2 = trim ($datos["lastName"]);
//         if (empty($nombre2)) {
//             $errores ["lastName"]  = "Debe ingresar su apellido" ;
//         }
//         $email = trim ($datos["email"]);
//         if (empty($email)) {
//             $errores ["email"]  = "Debe ingresar su email" ;
//         }
//         if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             $errores["email"] = "Debe ingresar un email valido";
//         }
//         $password = trim ($datos["password"]);
//         if (empty($password)) {
//             $errores ["password"]  = "Debe ingresar su contraseña" ;
//         }
//         if ( strlen ($password) < 8) {
//             $errores["password"] = "La contraseña debe tener minimo 8 caracteres";
//         }
//         $repeatPassword = trim ($datos["repeatPassword"]);
//         if (empty($repeatPassword)) {
//             $errores ["repeatPassword"]  = "Debe repetir su contraseña" ;
//         }
//         if ($repeatPassword != $password) {
//             $errores ["repeatPassword"] = "Las contraseñas no coinciden";
//         }

//     return $errores ;
//     }

//     public function crearRegistro($datos){
//         $usuario=[
//             "firstName"=>$datos["firstName"],
//             "lastName"=>$datos["lastName"],
//             "email"=>$datos["email"],
//             "password"=> password_hash ($datos["password"],PASSWORD_DEFAULT)
//             ];

//         return $usuario ;
//     }

//     public function guardarRegistro($registro){
//         $archivoJson = json_encode($registro);
//         file_put_contents('usuarios.json',$archivoJson.PHP_EOL,FILE_APPEND);
//     }

//     public function redirectLogin(){
//         return redirect()->route('login');
//     }


 }