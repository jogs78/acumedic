@extends('Shared.master')
@section('content')
<main>
    <section class="banner-section2">
      <div class="container">
        <div class="row">
          <div class="col-md-9 ">
            <div class="title">
              <h2>{{$servicio->Nombre}}</h2>
            </div>
          </div>
          <div class="col-md-3">
            <div class="redirect">
              <h3><i class="icono fas fa-home"></i><a style="color:#fff;" href="{{ route('inicio') }}">Inicio</a><i
                  class="icono fas fa-chevron-right"></i> Servicio detallado</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- servicio info -->
    <section class="banner-servicio-detallado">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="container-mas-servicios">
                        <p class="titulo">Más servicios</p>
                        <ul>
                          @foreach($otrosServicios as $otroServicio)
                          <a href="{{ route('servicio.detallado',['id'=>$otroServicio->id]) }}">
                            <li class="list-servicios">{{ $otroServicio->Nombre}}</li>
                          </a>
                          @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="col-md-12 bg-servicio">
                        <img src="{{asset('../uploads/servicios/'.$servicio->Imagen)}}"  alt="{{$servicio->TextoImagen}}">
                    </div>
                    <div class="col-md-12">
                        <h1 class="titulo-servicio">
                        {{$servicio->Nombre}}
                        </h1>
                    </div>
                    <div class="col-md-12">
                        <p class="descripcion-detail">
                           {{$servicio->DescripcionLarga}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- servicio info -->
  </main>
@endsection