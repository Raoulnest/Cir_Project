<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Probleme_problemes;
use App\Http\Controllers\Controller;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Support\Facades\DB;

class ProblemesController extends Controller
{

    
     //fonction  qui affiche la liste des problemes
     public function indexProblemes(){
        return view('problemes.index');
    }
    
    //fonction  qui affiche la liste des problemes
    public function listeProblemes(){
        $pro = ['Nombre Total est'=>Controller::nbTotal('probleme_id','Probleme_problemes'),'Liste'=>response()->json(Probleme_problemes::all(),200)];
        return $pro;
    }
    
    //fonction qui affiche la liste des problemes trier
    public function listeProblemesTrier(){
        $pro = response()->json(Probleme_problemes::where('probleme_parent_id','=',null)->get(),200);
        return $pro;
    }
    public function listeProblemesTrier1($parent_id){
        $pro = response()->json(Probleme_problemes::where('probleme_parent_id','=',$parent_id)->get(),200);
        return $pro;
    }

    //fonction pour ajouter des donnees dans la table Probleme_problemes 
    public function ajoutProblemes(Request $request){
        $pro =Probleme_problemes::create($request->all());
        return response($pro);
        }

        //fonction de recuperations des Problemes par id
        public function problemesParID($id){
            $table ='Probleme_problemes';
            $pro = Controller::infosParID($table,'probleme_id',$id);
            if (is_null($pro)) {
                return Response()->json(['message' => 'Problemes introuvables'], 404);
        }
            return response($pro,201);
    }

    // fonction pour mettre a jour la table Problemes_problemes
    public function misAjourProblemes(Request $request,$id){
        $pro = Probleme_problemes::where('probleme_id','=',$id)->update($request->all());
        return response($pro);
    }

    //Suppression de la solution par id
    public function supprimerProbleme($id){
        $pro = Probleme_problemes::where('probleme_id','=',$id)->delete();
        if($pro){
             return response()->json([$this->listeProblemes(),'message' => 'L\'identifiant '.$id.' a ete supprime']);;
        }else{
            return response()->json(['message' => 'L\'identifiant '.$id.' n\'existe pas',$this->listeProblemes()]);
        }
       
  
    }

    public function listeParOrdreLimites($attribut, $ordre, $indice, $limites){
        $tables ='Probleme_problemes'; 
        $pro = Controller::listeParOrdre($tables,$attribut, $ordre, $indice, $limites);
        return $pro;
    }
}
