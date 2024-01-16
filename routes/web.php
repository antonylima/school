<?php
use App\Http\Controllers\LoginController;
//use App\Http\Controllers\SchoolController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\AlunoController;
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

Route::view('/','login')->name('tela-login');
Route::get('/v',[LoginController::class,'validar'])->name('validation');
//Route::view('/','login');
Route::view('school','school.index')->name('school-index');
//Route::view('/','welcome');

Route::prefix('school')->group(function() {
    
    Route::prefix('cursos')->group(function() {
        Route::get('/',[CursoController::class , 'index'])->name('cursos-index');
        Route::get('/create',[CursoController::class , 'create'])->name('cursos-create');
        Route::post('/',[CursoController::class , 'store'])->name('cursos-store');
        Route::get('/{id}/edit/',[CursoController::class , 'edit'])->name('cursos-edit');
        Route::put('/{id}',[CursoController::class , 'update'])->name('cursos-update');
        Route::delete('/{id}',[CursoController::class , 'destroy'])->name('cursos-destroy');
    
    });
    Route::prefix('matriculas')->group(function() {
        Route::get('/',[MatriculaController::class , 'index'])->name('matriculas-index');
        Route::get('/create',[MatriculaController::class , 'create'])->name('matriculas-create');
        Route::post('/',[MatriculaController::class , 'store'])->name('matriculas-store');
        Route::get('/{id}/edit/',[MatriculaController::class , 'edit'])->name('matriculas-edit');
        Route::put('/{id}',[MatriculaController::class , 'update'])->name('matriculas-update');
        Route::delete('/{id}',[MatriculaController::class , 'destroy'])->name('matriculas-destroy');
});

    Route::prefix('alunos')->group(function() {
        Route::get('/',[AlunoController::class , 'index'])->name('alunos-index');
        Route::get('/create',[AlunoController::class , 'create'])->name('alunos-create');
        Route::post('/',[AlunoController::class , 'store'])->name('alunos-store');
        Route::get('/{id}/edit/',[AlunoController::class , 'edit'])->name('alunos-edit');
        Route::put('/{id}',[AlunoController::class , 'update'])->name('alunos-update');
        Route::delete('/{id}',[AlunoController::class , 'destroy'])->name('alunos-destroy');
}); 
    
}); 


    
    
    
    
    
    
    
    
            

