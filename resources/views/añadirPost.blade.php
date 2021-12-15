@extends('plantilla')
@section('titulo')
Añadir artículo
@endsection
@section('contenido')
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Añadir un nuevo artículo</h2>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="/api/posts" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <h1>Añadir post</h1>
                            <div class="form-group">
                              <label  style="color:white;" for="title">Titulo</label>
                                <input class="form-control" id="title" name="title" type="text" placeholder="Título del post *" required="required" data-validation-required-message="Por favor, la marca.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label  style="color:white;" for="body">Cuerpo</label>
                                <input class="form-control" id="body" name="body" type="text" placeholder="El cuerpo del post es *" required="required" data-validation-required-message="Por favor, introduce el modelo.">
                                <p class="help-block text-danger"></p>
                            </div>
                                          </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</section>
@endsection
