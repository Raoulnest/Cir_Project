<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_a_assister_user_a_assisters;
use App\Http\Controllers\Controller;

class Users_a_assisterController extends Controller
{
   //fonction  qui affiche la liste des Users
   public function listeUsers_assister(){
    $user = response()->json(User_a_assister_user_a_assisters::all(),200);
    return $user;
}

//fonction pour ajouter des donnees dans la table User 
public function ajoutUsers(Request $request){
    $user =User_a_assister_user_a_assisters::create($request->all());
    return response($user);
    }

    //fonction de recuperations des Problemes par id
    public function UserParID($id){
        $table ='User_a_assister_user_a_assisters';
        $user = Controller::infosParID($table,'user_a_assiter_id',$id);
        if (is_null($user)) {
            return Response()->json(['message' => 'Utulisateur introuvables'], 404);
    }
        return response($user);
}

// fonction pour mettre a jour la table User
public function misAjourUsers(Request $request,$id){
    $user = User_a_assister_user_a_assisters::where('user_a_assiter_id','=',$id)->update($request->all());
    return response($user,201);
}

//Suppression d'User par id
public function supprimerUser($id){
    $user = User_a_assister_user_a_assisters::where('user_a_assiter_id','=',$id)->delete();
    return Response($user);
}

// Liste des Users par ordre et limite d'affichage
public function listeParOrdreLimites($attribut, $ordre, $indice, $limites){
    $tables ='User_a_assister_user_a_assisters'; 
    $user = Controller::listeParOrdre($tables,$attribut, $ordre, $indice, $limites);
    return $user;
}
}
