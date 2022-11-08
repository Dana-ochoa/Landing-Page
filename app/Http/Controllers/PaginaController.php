<?php

namespace App\Http\Controllers;
namespace App\Models\Contacto;

use App\Http\Controllers\Controller;
use App\Models\Contacto\Contacto;
use Contacto as GlobalContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class PaginaController extends Controller
{
    public function contacto($codigo = null) {
    
        if($codigo == 1234){
            $nombre = 'Dana Ochoa';
            $correo = 'dana.ochoa@gmail.com';
        }else{
            $nombre = '';
            $correo = '';
        }

        // if(!empty($codigo)){
        //     $nom = $nombre[$codigo];
        // }
        
        //return view('form')->with(['nombre'=>$nombre, 'correo' => 'dana.ochoa@gmail.com']);
        return view('form', compact('nombre','correo'));
        
        }
        

    
    public function guarda(Request $request)
    {
        $request ->validate([ 
            'nombre' => ['required', 'min:5'],
            'correo' => 'required|email',
            'mensaje' => 'required|min:5',
        ]);
        
        //dd($request->all(), $request->only('nombre','correo'));

        // DB::table ('contactos')->insert([
        //     'nombre'=>$request->nombre,
        //     'correo'=>$request->correo,
        //     'mensaje'=>$request->mensaje,
        // ]);

        //DB::table('contacto')->insert($request->except('_token')); //es lo mismo que la funcion insert

        $contacto = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->mensaje = $request->mensaje;
        $contacto->save(); 

        // Contacto::create([
        //      'nombre'=>$request->nombre,
        //      'correo'=>$request->correo,
        //      'mensaje'=>$request->mensaje,
        // ]);


        //Contacto::create($request->all());

        return redirect('/contacto');
    }
 
}
