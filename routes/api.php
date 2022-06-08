<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProblemesController;
use App\Http\Controllers\SolutionsController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\ResponsablesController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('problemes',[ProblemesController::class,'listeProblemes']);
Route::get ('ajout_problemes',[ProblemesController::class,'ajoutProblemes']);
Route::get('problemes/{id}',[ProblemesController::class,'problemesParID']);
Route::get('delete_problemes/{id}',[ProblemesController::class,'supprimer_probleme']);
Route::get('update_problemes/{id}',[ProblemesController::class,'misAjourProblemes']);
Route::get('listeProblemes/{attribut}/{ordre}/{indice}/{limites}',[ProblemesController::class,'listeParOrdreLimites']);

Route::get('solutions',[SolutionsController::class,'listeSolutions']);
Route::get ('ajout_solutions',[SolutionsController::class,'ajoutSolutions']);
Route::get('solutions/{id}',[SolutionsController::class,'solutionsParID']);
Route::get('delete_solutions/{id}',[SolutionsController::class,'supprimer_solution']);
Route::get('update_solutions/{id}',[SolutionsController::class,'misAjourSolutions']);
Route::get('listeSolutions/{attribut}/{ordre}/{indice}/{limites}',[SolutionsController::class,'listeParOrdreLimites']);

Route::get('types',[TypesController::class,'listeTypes']);
Route::get('ajout_types',[TypesController::class,'ajoutTypes']);
Route::get('types/{id}',[TypesController::class,'typesParID']);
Route::get('delete_types/{id}',[TypesController::class,'supprimer_type']);
Route::get('update_types/{id}',[TypesController::class,'misAjourTypes']);
Route::get('listeTypes/{attribut}/{ordre}/{indice}/{limites}',[TypesController::class,'listeParOrdreLimites']);

Route::get('agents',[ResponsablesController::class,'listeAgents']);
Route::get('ajout_agents',[ResponsablesController::class,'ajoutAgents']);
Route::get('agents/{id}',[ResponsablesController::class,'agentParID']);
Route::get('delete_agents/{id}',[ResponsablesController::class,'supprimer_agent']);
Route::get('update_agents/{id}',[ResponsablesController::class,'misAjourAgents']);
Route::get('listeAgents/{attribut}/{ordre}/{indice}/{limites}',[ResponsablesController::class,'listeParOrdreLimites']);
Route::get('listeAgentsT/{attribut}',[ResponsablesController::class,'nbTotal']);

Route::get('users',[usersController::class,'listeUsers']);
Route::get('ajout_users',[usersController::class,'ajoutUsers']);
Route::get('users/{id}',[usersController::class,'userParID']);
Route::get('delete_users/{id}',[usersController::class,'supprimerUsers']);
Route::get('update_users/{id}',[usersController::class,'misAjourUsers']);
Route::get('liste_users/{attribut}/{ordre}/{indice}/{limites}',[usersController::class,'listeParOrdreLimites']);

