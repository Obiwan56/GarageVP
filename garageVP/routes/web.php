<?php

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FiltreController;
use App\Http\Controllers\HoraireController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeviceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehiculeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/presentation', function () {
    return view('pages.presentation');
});

Route::get('/prestation', [SeviceController::class, 'prestationService']);
Route::get('/home', [SeviceController::class, 'prestationHomeService']);


Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/formCommentaire', [CommentaireController::class, 'formCom']);
Route::post('/formCommentaire', [CommentaireController::class, 'ajoutCom']);

Route::get('/allCommentaire', [CommentaireController::class, 'listeCommentaireOk']);
Route::get('/', [CommentaireController::class, 'dixDerCom']);

Route::get('/contact', [ContactController::class, 'formContact']);
Route::post('/contact', [ContactController::class, 'contact']);

Route::get('/contact-annonce/{id}/form', [ContactController::class, 'formContactAnnonce'])->name('pages.contactAnnonceForm');
Route::get('/annonce/{id}', [ContactController::class, 'formContactAnnonce'])->name('pages.detailAnnonce');
Route::post('/contact-annonce/{id}', [ContactController::class, 'contactAnnonce'])->name('contactAnnonce');


Route::post('/filtrer-vehicules', [FiltreController::class, 'filtrer'])->name('filtrer.vehicules');




Route::get('/deconnexion', [UserController::class, 'deconnexion']);

Route::get('/allAnnonce', [VehiculeController::class, 'allAnnonce']);

Route::get('/detailAnnonce/{id}', [VehiculeController::class, 'detail']);


Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/ajoutEmploye', [UserController::class, 'formUser']);
    Route::post('/ajoutEmploye', [UserController::class, 'creerEmploye']);
    Route::get('/gestionEmploye', [UserController::class, 'listeEmploye']);
    Route::get('/modifEmploye/{id}', [UserController::class, 'modifEmploye']);
    Route::post('/modifEmploye/{id}', [UserController::class, 'modifUser']);
    Route::get('/effacerEmploye/{id}', [UserController::class, 'effacerEmploye']);


    Route::get('/gestionService', [SeviceController::class, 'listService']);
    Route::get('/ajoutService', [SeviceController::class, 'formCreerService']);
    Route::post('/ajoutService', [SeviceController::class, 'newService']);
    Route::get('/modifService/{id}', [SeviceController::class, 'formModifService']);
    Route::post('/modifService/{id}', [SeviceController::class, 'modifService']);
    Route::get('/effacerService/{id}', [SeviceController::class, 'deleteService']);

    Route::get('/gestionHoraire', [HoraireController::class, 'listeHoraire']);
    Route::get('/formModifHoraire/{id}', [HoraireController::class, 'formModifHoraire']);
    Route::post('/formModifHoraire/{id}', [HoraireController::class, 'modifHoraire']);
});

Route::middleware(['auth'])->group(function () {

    Route::get('/gestionAnnonce', [VehiculeController::class, 'listeAnnonce']);
    Route::get('/ajoutAnnonce', [VehiculeController::class, 'formCreerAnnonce']);
    Route::post('/ajoutAnnonce', [VehiculeController::class, 'enregistrerAnnonce'])->name('creerAnnonce');
    Route::get('/modifAnnonce/{id}', [VehiculeController::class, 'formMofifAnnonce']);
    Route::post('/modifAnnonce/{id}', [VehiculeController::class, 'modifAnnonce']);
    Route::get('/effacerAnnonce/{id}', [VehiculeController::class, 'effacerVehicule']);

    Route::get('/gestionCommentaire', [CommentaireController::class, 'gestionCom']);
    Route::get('/deleteCom/{id}', [CommentaireController::class, 'deleteCom']);
    Route::get('/deleteCom2/{id}', [CommentaireController::class, 'deleteCom2']);
    Route::get('/aprouvCom/{id}', [CommentaireController::class, 'aprouvCom']);
    Route::get('/listeComPubli', [CommentaireController::class, 'commentaireOk']);
});



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
