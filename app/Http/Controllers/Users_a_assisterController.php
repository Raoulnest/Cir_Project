<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_a_assister_user_a_assisters;
use App\Http\Controllers\Controller;

class Users_a_assisterController extends Controller
{
   //function  qui affiche la liste des Users
   public function listeUsers(){
    $user = response()->json(User_a_assister_user_a_assisters::all(),200);
    return $user;
}

//function pour ajouter des donnees dans la table User 
public function ajoutUsers(Request $request){
    $user =User_a_assister_user_a_assisters::create($request->all());
    return response($user);
    }

    //functions de recuperations des Problemes par id
    public function UserParID($id){
        $user = User_a_assister_user_a_assisters::find($id);
        if (is_null($User)) {
            return Response()->json(['message' => 'Utulisateur introuvables'], 404);
    }
        return $user;
}

// function pour mettre a jour la table User
public function misAjourUsers(Request $request,$id){
    $user = User_a_assister_user_a_assisters::find($id);
    $user->update($request->all);
    return response($user,201);
}

//Suppression d'User par id
public function supprimer_User($id){
    $user = User_a_assister_user_a_assisters::find($id);
    if (is_null($user)) {
        return Response()->json(['message' => 'User introuvables'], 404);
    }
    $user->delete();
    return Response()->json(['message' => 'Suppression avec succees'], 404);
}
// Liste des Users par ordre et limite d'affichage
public function listeParOrdreLimites($attribut, $ordre, $indice, $limites){
    
    $tables ='User_a_assister_user_a_assisters'; 
    $user = Controller::listeParOrdre($tables,$attribut, $ordre, $indice, $limites);
    return $user;
}
}
