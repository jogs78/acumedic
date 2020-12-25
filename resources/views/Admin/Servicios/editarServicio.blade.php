@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Crear servicio</h4>
                           
                        </div>
                        <div class="col-sm-8 col-xl-6">
                            <form class="form-inline float-sm-right mt-3 mt-sm-0">
                                <div class="btn-group mb-sm-0 mr-2">

                                    <a  href="{{route('servicios.list')}}" class="btn btn-outline-danger">
                                        <i class='fas fa-times'></i> Cancelar
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- content -->
                    <!-- row -->
            
                    <!-- products -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('servicios.update',['id'=>$servicio->id] )}}" method="post" class="row" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="form-group col-md-12">
                                            <label for="Nombre">Nombre del servicio</label>
                                            <input type="text" class="form-control @error('Nombre') is-invalid @enderror" value="{{old('Nombre', $servicio->Nombre)}}" name="Nombre" id="Nombre" placeholder="Nombre del servicio" required>
                                            @error('Nombre')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="Precio">Precio</label>
                                            <input type="text" class="form-control @error('Precio') is-invalid @enderror" value="{{old('Precio', $servicio->Precio)}}" name="Precio" id="Precio" placeholder="Precio del servicio" required>
                                            @error('Precio')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="DescripcionCorta">Descripción corta (Máximo 200 caracteres)</label>
                                            <input type="text" class="form-control @error('DescripcionCorta') is-invalid @enderror"  value="{{old('DescripcionCorta', $servicio->DescripcionCorta)}}" name="DescripcionCorta" id="DescripcionCorta" maxlength="200" placeholder="Descripción corta" required>
                                            @error('DescripcionCorta')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="DescripcionLarga">Descripción larga del servicio</label>
                                            <div>
                                                <textarea name="DescripcionLarga" id="DescripcionLarga" required class="form-control @error('DescripcionLarga') is-invalid @enderror" style="height: 55vh;">{{old('DescripcionLarga', $servicio->DescripcionLarga)}}</textarea>
                                            </div>
                                            @error('DescripcionLarga')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <a href="{{ route('servicios.list')}}" class="btn btn-danger" >Cancelar</a>
                                            <button class="btn btn-primary" type="submit">Actualizar servicio</button>
                                        </div>
                                    

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body pb-0">
                                    <div class=" mt-3" style="padding-bottom:4%" >
                                        <h4>Logo de servicio</h4>
                                            <img id="category-img-tag" src="{{asset('../uploads/servicios/'.$servicio->Logo)}}" alt="{{$servicio->TextoLogo}}"
                                                style="width: 150px;" />
                                            <h5 class="mt-2 mb-0">Asi se ve tu logo de servicio</h5>
                                            <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu logo de servicio
                                            </h6>
                                            <div class="form-group col-md-12">
                                                <input id="cat_image" name="Logo" type="file" accept="image/*"/>
                                                @if ($errors->has('Logo'))
                                                    <span class="help-block text-danger">
                                                        <strong>{{$errors->first('Logo')}}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="TextoLogo" style="text-align: left;">Texto alternado</label>
                                                <div>
                                                    <input type="text" class="form-control @error('TextoLogo') is-invalid @enderror" value="{{old('TextoLogo', $servicio->TextoLogo)}}" name="TextoLogo" id="TextoLogo" placeholder="Texto alternado de tu imagen" required>
                                                    @error('TextoLogo')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <h4>Imagen de tu servicio</h4>
                                            <img id="category-img-tag1" src="{{asset('../uploads/servicios/'.$servicio->Imagen)}}" alt="{{$servicio->TextoImagen}}"
                                                style="width: 150px;" />
                                            <h5 class="mt-2 mb-0">Asi se ve la imagen de tu servicio</h5>
                                            <h6 class="text-muted font-weight-normal mt-2 mb-4">Es una pequeña previsualización de tu logo de servicio
                                            </h6>
                                            <div class="form-group col-md-12">
                                                <input id="cat_image1" name="Imagen" type="file" accept="image/*"/>
                                                @if ($errors->has('Imagen'))
                                                    <span class="help-block text-danger">
                                                        <strong>{{$errors->first('Imagen')}}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="TextoImagen" style="text-align: left;">Texto alternado</label>
                                                <div>
                                                    <input type="text" class="form-control @error('TextoImagen') is-invalid @enderror" value="{{old('TextoImagen', $servicio->TextoImagen)}}" name="TextoImagen" id="TextoImagen" placeholder="Texto alternado de tu imagen" required>
                                                    @error('TextoImagen')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                        </form>
                    </div>
                    <!-- end row -->
                    <!-- stats + charts -->

                </div>
            </div> <!-- content -->

        </div>
@endsection
@section('scriptServicios')
<script src="{{asset('js/jquery.js')}}"></script>
<script>
            function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#category-img-tag').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
        
        $("#cat_image").change(function(){
            readURL(this);
        });
    </script>
        <script>
            function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#category-img-tag1').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
        
        $("#cat_image1").change(function(){
            readURL1(this);
        });
    </script>
@endsection