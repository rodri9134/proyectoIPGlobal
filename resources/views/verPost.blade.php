@extends('plantilla')
@section('titulo')
Ver post
@endsection
@section('contenido')
<section id="verPost">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Ver post</h2>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2>Post {{$articulo->id}}</h2>
                <h3>{{$articulo->title}}</h3>
                <h4>{{$articulo->body}}</h4>

                    </div>


            </div>
        </div>
    </div>
</section>
@endsection
