<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EnvioEmailController extends Controller
{
    public function enviarMail(Request $request){


        $data = ['nombre' => $request->nombre,
                "email"=>$request->email,
                "asunto"=>$request->asunto,
                "mensaje"=>$request->mensaje];


        \Mail::send('mails.mail', $data, function ($message) {
    
            $message->from('info@curvasud.com.ar', 'Curvasud');
    
            $message->to('laf.0182@gmail.com')->subject('Envío desde contacto');
    
        });
    
        return redirect()->back()->withErrors(['Mensaje enviado correctamente']);

    }
}
