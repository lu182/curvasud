<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
class EnvioEmailController extends Controller
{
    public function enviarMail(Request $request){


        $data = ['nombre' => $request->nombre,
                "email"=>$request->email,
                "asunto"=>$request->asunto,
                "mensaje"=>$request->mensaje];

                try{
        \Mail::send('mails.mail', $data, function ($message) {
    
            $message->from('info@curvasud.com.ar', 'Curvasud');
    
            $message->to('laf.0182@gmail.com')->subject('Envío desde contacto');
    
        });
    }
    catch(\Exception $e){
    }
    
    if(isset($e)){
        return redirect()->back()->withErrors(['No se pudo enviar debido a un problema de conectividad. Intente nuevamente en unos minutos']);

    }
        return redirect()->back()->withErrors(['Mensaje enviado correctamente']);

    }


    public function suscripcion(Request $request){

        $email = (string)$request->email;

        $data = [
            "email"=>$email
        ];

        $nuevoSuscriptor = DB::table("suscripciones")->insert(
            ["mail"=>$email]
        );



        try{

            \Mail::send('mails.suscripcion', $data, function ($message) {
        
                $message->from('info@curvasud.com.ar', 'Curvasud');
        
                $message->to('info@curvasud.com.ar')->subject('Gracias por suscribirte');
        
            });

        }

        catch(\Exception $e){

        }
        
        if(isset($e)){
            return redirect()->back()->withErrors(['No se pudo suscribir debido a un problema de conectividad. Intente nuevamente en unos minutos'.$e]);
        }
            return redirect()->back()->withErrors(['Suscripción realizada correctamente']);
    }
}
