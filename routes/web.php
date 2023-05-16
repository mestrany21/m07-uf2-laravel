<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\elmeucontrolador;
use Illuminate\Database\Eloquent\Model;

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
    return view('welcome');
});

Route::get('', function(){
    return view('app'); //menu navbar
});

Route::get('/postres', function(){
    return view('postres'); //llistat de postres
});

Route::get('/inici', function(){
    return view('index'); //inicial, benvinguda
});

Route::get('/nosaltres', function(){
    return view('nosaltres'); //nosaltres
});
Route::get('/todos', function(){
    return view('postres'); 
});
Route::get('/todos-buscar', function(){
    return view('buscarresult'); 
});


//pel controlador i el formulari
Route::get('/inici', function(){
    return view('index');
})->name('todos');

//proves
Route::get('/afegir_postres', [elmeucontrolador::class, 'formulari'])->name('afegir_postres');

Route::post('afegir_postres', [elmeucontrolador::class, 'insert'])->name('todos');

//pel controlador i la pàgina de mostrar
Route::get('/postres', [elmeucontrolador::class, 'mostrar'])->name('todos-mostrar');

//pel buscador
Route::get('/buscar', [elmeucontrolador::class,  'formularibuscar'])->name('todos-buscar');
Route::post('/buscar', [elmeucontrolador::class, 'buscar'])->name('todos-buscar');
// Route::get('/mostrarresul', function(){
//     return view('mostrarresul'); 
// });

