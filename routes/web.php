<?php

use Illuminate\Support\Facades\Route;



/*
 * ********** RODRIGO ORDÓÑEZ LÓPEZ ****
 * ***********   BLOG ************************
  */
// Pagina de bienvenida
Route::get('/', function () {
    return view('inicio');
});

//listado de articulos
Route::get('/api/posts', 'ArticulosController@listar');
Route::post('/api/posts', 'ArticulosController@anadir');


//Añadir y seleccionar artículo

Route::get('/api/posts/anadir', function () {
    return view('añadirPost');
});

Route::get('/web/posts/{idPost}', 'ArticulosController@verPost');

?>
