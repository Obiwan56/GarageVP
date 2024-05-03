<?php

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehiculeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/presentation', function(){
    return view('pages.presentation');
});

Route::get('/prestation', function(){
    return view('pages.prestation');
});

Route::get('/contact', function(){
    return view ('pages.contact');
});

Route::get('/formCommentaire', [CommentaireController::class, 'formCom']);
Route::post('/formCommentaire', [CommentaireController::class, 'ajoutCom']);
Route::get('/gestionCommentaire', [CommentaireController::class, 'gestionCom']);
Route::get('/deleteCom/{id}', [CommentaireController::class, 'deleteCom']);
Route::get('/deleteCom2/{id}', [CommentaireController::class, 'deleteCom2']);
Route::get('/aprouvCom/{id}', [CommentaireController::class, 'aprouvCom']);
Route::get('/listeComPubli', [CommentaireController::class, 'commentaireOk']);
Route::get('/allCommentaire', [CommentaireController::class, 'listeCommentaireOk']);
Route::get('/', [CommentaireController::class, 'dixDerCom']);








Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/ajoutEmploye', [UserController::class, 'formUser']);
    Route::post('/ajoutEmploye', [UserController::class, 'creerEmploye']);
    Route::get('/gestionEmploye', [UserController::class, 'listeEmploye']);
    Route::get('/modifEmploye/{id}', [UserController::class, 'modifEmploye']);
    Route::post('/modifEmploye/{id}', [UserController::class, 'modifUser']);
    Route::get('/effacerEmploye/{id}', [UserController::class, 'effacerEmploye']);
});

Route::middleware(['auth'])->group(function () {

    Route::get('/gestionAnnonce', [VehiculeController::class, 'listeAnnonce']);
    Route::get('/ajoutAnnonce', [VehiculeController::class, 'formCreerAnnonce']);
    Route::post('/ajoutAnnonce', [VehiculeController::class, 'enregistrerAnnonce'])->name('creerAnnonce');
    Route::get('/modifAnnonce/{id}', [VehiculeController::class, 'formMofifAnnonce']);
    Route::post('/modifAnnonce/{id}', [VehiculeController::class, 'modifAnnonce']);
    Route::get('/effacerAnnonce/{id}', [VehiculeController::class, 'effacerVehicule']);
});



Route::get('/deconnexion', [UserController::class, 'deconnexion']);

Route::get('reset-password', [ResetPasswordController::class, 'showResetForm'])->name('reset-password');

Route::get('/allAnnonce', [VehiculeController::class, 'allAnnonce']);

Route::get('/detailAnnonce/{id}', [VehiculeController::class, 'detail']);

Route::post('/annonces/filtre', [VehiculeController::class, 'filtre'])->name('annonces.filtre');











Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
