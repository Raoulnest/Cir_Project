<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type_types;
use App\Http\Controllers\Controller;



class TypesController extends Controller
{

    //Lister les types
    public function listeTypes(){
        return response()->json(Type_types::all(),200);
    }

    //function pour ajouter des donnees dans la table types 
    public function ajoutTypes(Request $request){
        $tp = Type_types::create($request->all());
        return response($tp,201);
    }

    // function pour mettre a jour la table types
    public function misAjourTypes(Request $request,$id){
        $tp = Type_types::where('type_id','=',$id)->update($request->all());
        return response($tp,201);
    }
    
    //functions de recuperations des types par id
    public function typesParID($id){        
        $table ='Type_types';
        $tp = Controller::infosParID($table,'type_id',$id);
        if (is_null($tp)) {
            return Response()->json(['message' => 'Types introuvables'], 404);
        }
        return response($tp,201);
    }
    
    //functions de supprimer des types par id
    public function supprimer_type($id){        
        $tp = Type_types::where('type_id','=',$id)->delete();
        return response($tp);
    }

    public function listeParOrdreLimites($attribut, $ordre, $indice, $limites){
            $tables ='Type_types'; 
            $tp = Controller::listeParOrdre($tables,$attribut, $ordre, $indice, $limites);
        return $tp;
    }
}
