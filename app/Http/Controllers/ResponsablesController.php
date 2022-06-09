<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable_responsables;
use App\Http\Controllers\Controller;

class ResponsablesController extends Controller
{
    public function listeAgents(){
        return response()->json(Responsable_responsables::all(),200);
    }

    //function pour ajouter des donnees dans la table Responsable_responsables 
    public function ajoutAgents(Request $request){
        $ag = Responsable_responsables::create($request->all());
        return response($ag,201);
    }

    // function pour mettre a jour la table Agents_respo
    public function misAjourAgents(Request $request){
        $ag = Responsable_responsables::find($id);
        if (is_null($ag)) {
            return Response()->json(['message' => 'Agents_responsables introuvables'], 404);
        }
        $ag->update($request->all);
        return response($ag,201);
    }

    //functions de recuperations des Agents_respo par id
    public function agentParID($id){
        $ag = Responsable_responsables::find($id);
        if (is_null($ag)) {
            return Response()->json(['message' => 'Agents_responsables introuvables'], 404);
        }
        return $ag;
    }
    
    // Suppression d'un agent responsable dans la table agent_respo
    public function supprimer_agent($id){
        $ag = Responsable_responsables::find($id);
        if (is_null($ag)) {
            return Response()->json(['message' => 'Agents_responsables introuvables'], 404);
        }
        $ag->delete();
        return response(Null, 204);
    }
    
    
    public function listeParOrdreLimites($attribut, $ordre, $indice, $limites){
            $tables ='Responsable_responsables'; 
            $agents = Controller::listeParOrdre($tables,$attribut, $ordre, $indice, $limites);
        
        return $agents;
    }
}
