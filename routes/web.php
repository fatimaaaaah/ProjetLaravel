<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/blog')->name('blog.')->group(function () {

    Route::get('/', [BlogController::class, 'index'])->name('index');


    Route::get('/{slug}--{id}', [BlogController::class, 'show'])->where([
        'id' => '[0-9]+',
        'slug' => '[a-zA-Z0-9\-]+'
    ])->name('show');
});


Route::get('/connexion', [BlogController::class, 'formulaire']);

Route::post('/connexion', 'BlogController@traitement');



Route::post('/connexion', [AuthController::class, 'login'])->name('login');


Route::get('/{slug}--{id}', [BlogController::class, 'inscription'])->where([
    'id' => '[0-9]+',
    'slug' => '[a-zA-Z0-9\-]+'
])->name('show');

Route::get('/inscription',[BlogController::class, 'inscription'])->name('incription.');

Route::get('/inscription2',[BlogController::class, 'inscription2'])->name('incription2.');

Route::get('/profil', function () {
    return view('profil');
})->middleware('auth');
