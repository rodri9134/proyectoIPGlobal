

@extends('plantilla')
@section('titulo')
Listado de artículos
@endsection
@section('contenido')
<section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 text-center">



                  <br><br>
              <a href="/api/posts/anadir">  <button class="btn btn-info">Añadir artículo</button></a>

          </div>
      </div>
        <div class="row">
            <div class="col-lg-12 text-center">



                    <br><br>
                <h2 class="section-heading text-uppercase">Listado de artículos</h2>

            </div>
        </div>

          <div class="row">

            @foreach ($articulos as $posicion => $articulo)
            <div class="col-md-6 col-sm-6 portfolio-item">

              <p>{{$articulo->title}} </p>

                <div class="portfolio-caption">
                <a href="/web/posts/{{$articulo->id}}">    <button class="btn btn-success">Ver artículo</button></a>
                    </a>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
@endsection
