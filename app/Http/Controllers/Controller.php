<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function nbTotal($attribut,$tables){
        $usersCount=0;
        $usersCount = DB::table($tables)->orderBy($attribut)->count();
        return $usersCount;
    }

     public function listeParOrdre($tables,$attribut, $ordre, $indice, $limites){ 
        $elements = DB::table($tables)->orderBy($attribut, $ordre)->offset($indice-1)->limit($limites)->get();
        $nombreTotal = $this->nbTotal($attribut,$tables);

        $donne = ['nombre Totale est '=>$nombreTotal,'liste ' =>$elements] ; 
            return $donne;
}

public function infosParID($tables,$id, $id1){ 
    $donnee= DB::table($tables)->where($id,'=',$id1)->get();
        return $donnee;
}


}