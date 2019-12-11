<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact_us;

class ContactUsController extends Controller
{
    public function contact_us(){

        return view ('form_contact');
    }
    public function contact_us_post(Request $request){
        $this->validate ($request, [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required'
        ]);

        Contact_us::create($request->all());

            Mail::send('email',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'phone' => $request->get('phone'),
           'user_message' => $request->get('message')
       ), function($message)
   {
       $message->from('casilla desde donde se manda el@mail');
       $message->to('casilla de destini del @mail', 'Admin')->subject('Mail del Formulario de Contacto');
   });

        return back()->with('success', 'Gracias por contactarnos !! Responderemos a la brevedad !!');


    }
}
