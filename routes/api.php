<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProblemesController;
use App\Http\Controllers\SolutionsController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\ResponsablesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Problemes_a_assisters_detailsController;
use App\Http\Controllers\Problemes_a_assistersController;
use App\Http\Controllers\Users_a_assisterController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('proGUI',[ProblemesController::class,'indexProblemes']);

Route::get('problemes',[ProblemesController::class,'listeProblemes']);
Route::get ('ajout_problemes',[ProblemesController::class,'ajoutProblemes']);
Route::get('problemes/{id}',[ProblemesController::class,'problemesParID']);
Route::get('delete_problemes/{id}',[ProblemesController::class,'supprimerProbleme']);
Route::get('update_problemes/{id}',[ProblemesController::class,'misAjourProblemes']);
Route::get('listeProblemes/{attribut}/{ordre}/{indice}/{limites}',[ProblemesController::class,'listeParOrdreLimites']);

Route::get('problemesT',[ProblemesController::class,'listeProblemesTrier']);
Route::get('problemesT/{libelle_probleme}',[ProblemesController::class,'listeProblemesTrier1']);

Route::get('Problemes_a_assisters',[Problemes_a_assistersController::class,'listeProblemes']);
Route::get('ajout_problemes_a_assisters',[Problemes_a_assistersController::class,'ajoutProblemes']);
Route::get('Problemes_a_assisters/{id}',[Problemes_a_assistersController::class,'problemesParID']);
Route::get('delete_problemes_a_assisters/{id}',[Problemes_a_assistersController::class,'supprimerProblemes']);
Route::get('update_problemes_a_assisters/{id}',[Problemes_a_assistersController::class,'misAjourProblemes']);
Route::get('liste_problemes_a_assisters/{attribut}/{ordre}/{indice}/{limites}',[Problemes_a_assistersController::class,'listeParOrdreLimites']);

Route::get('Problemes_a_assisters_details',[Problemes_a_assisters_detailsController::class,'listeProblemes']);
Route::get('ajout_problemes_a_assisters_details',[Problemes_a_assisters_detailsController::class,'ajoutProblemes']);
Route::get('Problemes_a_assisters_details/{id}',[Problemes_a_assisters_detailsControllerterController::class,'problemesParID']);
Route::get('delete_problemes_a_assisters_details/{id}',[Problemes_a_assisters_detailsController::class,'supprimerProblemes']);
Route::get('update_problemes_a_assisters_details/{id}',[Problemes_a_assisters_detailsController::class,'misAjourProblemes']);
Route::get('liste_problemes_a_assisters_details/{attribut}/{ordre}/{indice}/{limites}',[Problemes_a_assisters_detailsController::class,'listeParOrdreLimites']);

Route::get('solutions',[SolutionsController::class,'listeSolutions']);
Route::get ('ajout_solutions',[SolutionsController::class,'ajoutSolutions']);
Route::get('solutions/{id}',[SolutionsController::class,'solutionsParID']);
Route::get('delete_solutions/{id}',[SolutionsController::class,'supprimerSolution']);
Route::get('update_solutions/{id}',[SolutionsController::class,'misAjourSolutions']);
Route::get('listeSolutions/{attribut}/{ordre}/{indice}/{limites}',[SolutionsController::class,'listeParOrdreLimites']);

Route::get('soluitionT',[ProblemesController::class,'listeSolutionsTrier']);
Route::get('soluitionT/{libelle_solution}',[ProblemesController::class,'listeSolutionsTrier1']);


Route::get('types',[TypesController::class,'listeTypes']);
Route::get('ajout_types',[TypesController::class,'ajoutTypes']);
Route::get('types/{id}',[TypesController::class,'typesParID']);
Route::get('delete_types/{id}',[TypesController::class,'supprimerType']);
Route::get('update_types/{id}',[TypesController::class,'misAjourTypes']);
Route::get('listeTypes/{attribut}/{ordre}/{indice}/{limites}',[TypesController::class,'listeParOrdreLimites']);

Route::get('responsables',[ResponsablesController::class,'listeResponsables']);
Route::get('ajout_responsables',[ResponsablesController::class,'ajoutResponsables']);
Route::get('responsables/{id}',[ResponsablesController::class,'responsableParID']);
Route::get('delete_responsables/{id}',[ResponsablesController::class,'supprimerResponsables']);
Route::get('update_responsables/{id}',[ResponsablesController::class,'misAjourResponsables']);
Route::get('listeresponsables/{attribut}/{ordre}/{indice}/{limites}',[ResponsablesController::class,'listeParOrdreLimites']);

Route::get('users',[usersController::class,'listeUsers']);
Route::get('ajout_users',[usersController::class,'ajoutUsers']);
Route::get('users/{id}',[usersController::class,'userParID']);
Route::get('delete_users/{id}',[usersController::class,'supprimerUsers']);
Route::get('update_users/{id}',[usersController::class,'misAjourUsers']);
Route::get('liste_users/{attribut}/{ordre}/{indice}/{limites}',[usersController::class,'listeParOrdreLimites']);

Route::get('users_a_assister',[Users_a_assisterController::class,'listeUsers']);
Route::get('ajout_users_a_assister',[Users_a_assisterController::class,'ajoutUsers']);
Route::get('users_a_assister/{id}',[Users_a_assisterController::class,'userParID']);
Route::get('delete_users_a_assister/{id}',[Users_a_assisterController::class,'supprimerUsers']);
Route::get('update_users_a_assister/{id}',[Users_a_assisterController::class,'misAjourUsers']);
Route::get('liste_users_a_assister/{attribut}/{ordre}/{indice}/{limites}',[Users_a_assisterController::class,'listeParOrdreLimites']);

