<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solution_solutions;
use App\Http\Controllers\Controller;

class SolutionsController extends Controller
{
    //functions qui affiche la liste des solutions
    public function listeSolutions(){
        return response()->json(Solution_solutions::all(),200);
    }
    //function pour ajouter des donnees dans la table solution 
    public function ajoutSolutions(Request $request){
    $sol = Solution_solutions::create($request->all());
        return response($sol);
    }
    //functions de recuperations des solutions par id
    public function solutionsParID($id){
        $sol = Solution_solutions::find($id);
            if (is_null($sol)) {
                return Response()->json(['message' => 'Solutions introuvables'], 404);
            }
        return $sol;
    }
    //function pour mettre a jour la table solution
    public function misAjourSolutions(Request $request,$id){
        $sol = Solution_solutions::find($id);
        if (is_null($sol)) {
            return Response()->json(['message' => 'Solutions introuvables'], 404);
        }
        $sol->update($request->all);
        return response($sol,201);
    }
    //Suppression de la solution par id
    public function supprimer_solution($id){
        $sol = Solution_solutions::find($id);
        if (is_null($sol)) {
            return Response()->json(['message' => 'Solutions introuvables'], 404);
        }
        $sol->delete();
        return response(Null, 204);
    }
    public function listeParOrdreLimites($attribut, $ordre, $indice, $limites){
        
        $tables ='Solution_solutions'; 
        $sol = Controller::listeParOrdre($tables,$attribut, $ordre, $indice, $limites);
            return $sol;
    }
}