<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Probleme_a_assiters;
use App\Http\Controllers\Controller;

class Problemes_a_assistersController extends Controller
{
    //function  qui affiche la liste des problemes
    public function listeProblemes(){
        $pro = response()->json(Probleme_a_assiters::all(),200);
        return $pro;
    }
    
    //function pour ajouter des donnees dans la table Probleme_problemes 
    public function ajoutProblemes(Request $request){
        $pro =Probleme_a_assiters::create($request->all());
        return response($pro);
        }

        //functions de recuperations des Problemes par id
        public function problemesParID($id){
            $pro = Probleme_a_assiters::find($id);
            if (is_null($pro)) {
                return Response()->json(['message' => 'Problemes introuvables'], 404);
        }
            return $pro;
    }

    // function pour mettre a jour la table Problemes_problemes
    public function misAjourProblemes(Request $request,$id){
        $pro = Probleme_a_assiters::find($id);
        $pro->update($request->all);
        return response($pro,201);
    }

    //Suppression de la solution par id
    public function supprimer_probleme($id){
        $pro = Probleme_a_assiters::find($id);
        if (is_null($pro)) {
            return Response()->json(['message' => 'Problemes introuvables'], 404);
        }
        $pro->delete();
        return Response()->json(['message' => 'Suppression avec succes'], 404);
    }

    public function listeParOrdreLimites($attribut, $ordre, $indice, $limites){
        
        $tables ='Probleme_a_assiters'; 
        $pro = Controller::listeParOrdre($tables,$attribut, $ordre, $indice, $limites);
        return $pro;
    }
}
