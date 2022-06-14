<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Probleme_a_assisters_details;
use App\Http\Controllers\Controller;

class Problemes_a_assisters_detailsController extends Controller
{
    public function listeProblemes(){
        $pro = response()->json(Probleme_a_assisters_details::all(),200);
        return $pro;
    }
    
    //function pour ajouter des donnees dans la table Probleme_problemes 
    public function ajoutProblemes(Request $request){
        $pro =Probleme_a_assisters_details::create($request->all());
        return response($pro);
        }

        //functions de recuperations des Problemes par id
        public function problemesParID($id){
            $table ='Probleme_a_assisters_details';
            $pro = Controller::infosParID($table,'probleme_a_assisters_details_id',$id);
            if (is_null($pro)) {
                return Response()->json(['message' => 'Problemes introuvables'], 404);
        }
            return response($pro,201);
    }

    // function pour mettre a jour la table Problemes_problemes
    public function misAjourProblemes(Request $request,$id){
        $pro = Probleme_a_assisters_details::where('probleme_a_assisters_details_id','=',$id)->update($request->all());
        return response($pro,201);   
    }

    //Suppression de la solution par id
    public function supprimer_probleme($id){        
        $pro = Probleme_a_assisters_details::where('probleme_a_assisters_details_id','=',$id)->delete();
        return response($pro,201);
    }

    public function listeParOrdreLimites($attribut, $ordre, $indice, $limites){
        $tables ='Probleme_a_assisters_details'; 
        $pro = Controller::listeParOrdre($tables,$attribut, $ordre, $indice, $limites);
        return $pro;
    }
}
