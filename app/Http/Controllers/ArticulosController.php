<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Articulo;
use Carbon\Carbon;
use App\Http\Requests\AnadirArticuloRequest;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\AuthenticatesUsers;

class ArticulosController extends Controller {



    //Lista los artículos
    public function listar() {
        $articulos = Articulo::all();

        return view('listado', ['articulos' => $articulos]);
    }

    //Permite crear un artículo nuevo
    public function anadir(AnadirArticuloRequest $request) {
        $title = $request->input('title');
        $body = $request->input('body');

        $articulo = new Articulo;

        $articulo->title = $title;
        $articulo->body = $body;

        $articulo->save();
        return view('inicio');
    }

//Permite ver un post seleccionado
    public function verPost($idPost) {
        $articulo = Articulo::find($idPost);
        return view('verPost', ["articulo" => $articulo]);

    }

  }
