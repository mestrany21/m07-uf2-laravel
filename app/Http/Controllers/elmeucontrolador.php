<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\postres;
use Illuminate\Database\Eloquent\Model;

class elmeucontrolador extends Controller
{
    //
    public function insert(Request $request){

        $request->validate(
            [
                'Nom' => 'required|min:3',
                'Num_ingredients' => 'required|numeric',
                'Minuts' => 'required|numeric'
            ],
            [
                'Nom.required'=>'És obligatori posar un nom a la recepta!',
                'Nom.min' => 'El nom de la recepta ha de tenir 3 caràcters mínim',
                'Num_ingredients.required'=>'És obligatori posar un número d\'ingredients de la recepta!',
                'Num_ingredients.numeric'=> 'El valor del camp del número d\'ingredients ha de ser numèric',
                'Minuts.required'=>'És obligatori posar una quantitat de temps!',
                'Minuts.numeric'=> 'El valor del camp del temps ha de ser numèric'
            ]
            );
            $todo=new postres();
            $todo->Nom=$request->Nom;
            $todo->Num_ingredients=$request->Num_ingredients;
            $todo->Minuts=$request->Minuts;
            $todo->save();
            return redirect()->route('afegir_postres')->with('success','creat correctament');
    }

    public function formulari(){
        $todo = postres::all();
        return view('afegir_postres', ['todos.index'=>$todo]);
    }

    public function mostrar(){
        $todo = postres::all();
        //return $todo;
        return view('postres', compact('todo'));
    }

    public function formularibuscar ()
    {
        $todo= postres::all();
        return view('buscar',['todos.buscar'=>$todo]);
    }

    public function buscar (Request $request)
    {
        $request->validate(
            [
                'Nom'=>'required'
            ],
            [
                'Nom.required'=>'És obligatori posar un nom de recepta!'            
            ]            
        );
       
        $recepta=$request->Nom;
        //dd($nombre); //comprova informació en el SGBD
        $todo=postres::where('Nom','like',"%$recepta%")->paginate(10); 
        echo $recepta;       
        return view('mostrarresul', compact('todo'));        
    }


}
