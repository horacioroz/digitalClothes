<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\View;

class RegisterController extends Controller
{
// public function show(){
//         return view('register');
// }


    public function validar($datos) {

        $nombre = trim ($datos["firstName"]);
        if (empty($nombre)) {
            $errores ["firstName"]  = "Debe ingresar su nombre" ;
        }
        $nombre2 = trim ($datos["lastName"]);
        if (empty($nombre2)) {
            $errores ["lastName"]  = "Debe ingresar su apellido" ;
        }
        $email = trim ($datos["email"]);
        if (empty($email)) {
            $errores ["email"]  = "Debe ingresar su email" ;
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores["email"] = "Debe ingresar un email valido";
        }
        $password = trim ($datos["password"]);
        if (empty($password)) {
            $errores ["password"]  = "Debe ingresar su contraseña" ;
        }
        if ( strlen ($password) < 8) {
            $errores["password"] = "La contraseña debe tener minimo 8 caracteres";
        }
        $repeatPassword = trim ($datos["repeatPassword"]);
        if (empty($repeatPassword)) {
            $errores ["repeatPassword"]  = "Debe repetir su contraseña" ;
        }
        if ($repeatPassword != $password) {
            $errores ["repeatPassword"] = "Las contraseñas no coinciden";
        }

    return $errores ;
    }

    public function crearRegistro($datos){
        $usuario=[
            "firstName"=>$datos["firstName"],
            "lastName"=>$datos["lastName"],
            "email"=>$datos["email"],
            "password"=> password_hash ($datos["password"],PASSWORD_DEFAULT)
            ];

        return $usuario ;
    }

    public function guardarRegistro($registro){
        $archivoJson = json_encode($registro);
        file_put_contents('usuarios.json',$archivoJson.PHP_EOL,FILE_APPEND);
    }

    public function redirectLogin(){
        return redirect()->route('login');
    }


}
