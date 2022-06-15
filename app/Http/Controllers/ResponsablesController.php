<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable_responsables;
use App\Http\Controllers\Controller;

class ResponsablesController extends Controller
{
    public function listeResponsables(){
        return response()->json(Responsable_responsables::all(),200);
    }

    //fonction pour ajouter des donnees dans la table Responsable_responsables 
    public function ajoutResponsables(Request $request){
        $ag = Responsable_responsables::create($request->all());
        return response($ag,201);
    }

    // fonction pour mettre a jour la table Agents_respo
    public function misAjourResponsables(Request $request,$id){
        $ag = Responsable_responsables::where('responsable_id','=',$id)->update($request->all());
        return response($ag);
    }

    //fonction de recuperations des Agents_respo par id
    public function responsableParID($id){
        $table ='Responsable_responsables';
        $ag = Controller::infosParID($table,'responsable_id',$id);
        if (is_null($ag)) {
            return Response()->json(['message' => 'Agents_responsables introuvables'], 404);
        }
        return response($ag);
    }
    
    // Suppression d'un agent responsable dans la table agent_respo
    public function supprimerResponsables($id){
        $ag = Responsable_responsables::where('responsable_id','=',$id)->delete();
        return response($ag);
    }
    
    
    public function listeParOrdreLimites($attribut, $ordre, $indice, $limites){
            $tables ='Responsable_responsables'; 
            $agents = Controller::listeParOrdre($tables,$attribut, $ordre, $indice, $limites);
        
        return $agents;
    }
}
