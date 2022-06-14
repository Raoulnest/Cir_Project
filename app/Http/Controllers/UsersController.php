<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    
    //function  qui affiche la liste des Users
    public function listeUsers(){
        $user = response()->json(User::all(),200);
        return $user;
    }
    
    //function pour ajouter des donnees dans la table User 
    public function ajoutUsers(Request $request){
        $user =User::create($request->all());
        return response($user);
        }

        //functions de recuperations des Problemes par id
        public function UserParID($id){
           
            $table ='User';
            $user = Controller::infosParID($table,'user_id',$id);
            if (is_null($user)) {
                return Response()->json(['message' => 'Utulisateur introuvables'], 404);
        }
            return response($user);
    }

    // function pour mettre a jour la table User
    public function misAjourUsers(Request $request,$id){
        $user = User::where('user_id','=',$id)->update($request->all());
        return Response($user);
       
    }

    //Suppression d'User par id
    public function supprimer_User($id){
        $user = User::where('user_id','=',$id)->delete();
        return Response($user);
    }
    
    // Liste des Users par ordre et limite d'affichage
    public function listeParOrdreLimites($attribut, $ordre, $indice, $limites){
        
        $tables ='User'; 
        $user = Controller::listeParOrdre($tables,$attribut, $ordre, $indice, $limites);
        return $user;
    }
}
