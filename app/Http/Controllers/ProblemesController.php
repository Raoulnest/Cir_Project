<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Probleme_problemes;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProblemesController extends Controller
{

     //function  qui affiche la liste des problemes
     public function indexProblemes(){
        
        return view('indexProblemes');
    }
    
    //function  qui affiche la liste des problemes
    public function listeProblemes(){
        $pro = response()->json(Probleme_problemes::all(),200);
        return $pro;
    }
    
    //function pour ajouter des donnees dans la table Probleme_problemes 
    public function ajoutProblemes(Request $request){
        $pro =Probleme_problemes::create($request->all());
        return response($pro);
        }

        //functions de recuperations des Problemes par id
        public function problemesParID($id){
            $table ='Probleme_problemes';
            $pro = Controller::infosParID($table,'probleme_id',$id);
            if (is_null($pro)) {
                return Response()->json(['message' => 'Problemes introuvables'], 404);
        }
            return response($pro,201);
    }

    // function pour mettre a jour la table Problemes_problemes
    public function misAjourProblemes(Request $request,$id){
        $pro = Probleme_problemes::where('probleme_id','=',$id)->update($request->all());
        return response($pro);
    }

    //Suppression de la solution par id
    public function supprimer_probleme($id){
        $pro = Probleme_problemes::where('probleme_id','=',$id)->delete();
        return response($pro,201);
  
    }

    public function listeParOrdreLimites($attribut, $ordre, $indice, $limites){
        $tables ='Probleme_problemes'; 
        $pro = Controller::listeParOrdre($tables,$attribut, $ordre, $indice, $limites);
        return $pro;
    }
}
