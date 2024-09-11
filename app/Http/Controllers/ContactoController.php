<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function formulario ($tipo_persona = null) { //SI NO TIENE NINGUN VALOR SE LE ASIGNA NULL
        //dd($tipo_persona);
        return view('formulario-contacto',compact('tipo_persona'));//CREA UNA COIPIA DEL VALOR DE LA VARIABLE   
    }

    public function newContact(Request $request) {
        //dd($request->all(), $request->nombre);
         $request->validate([
             'nombre'=> 'required |min:3|max:255',
             'correo'=>'required|email',
             'mensaje' => ['required','min:10']
         ]);
         $contacto = new Contacto();
         $contacto-> nombre = $request -> nombre;
         $contacto->correo = $request->correo;
         $contacto->mensaje = $request->mensaje;
         $contacto->save();
     
         return redirect('/lista');
     }
     
     public function lista(){
        $mensajes = Contacto::all();
        return view('lista',compact('mensajes'));
     }
}
