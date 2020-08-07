@extends('layouts.plantilla')
@section('content')
<div class="content-body mar-top">
    <div class="container-fluid">
        <div class="row-w justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header text-center btn-grad">New Registros</div>
                    <div class="card-body">
                        {{ $info }}
                        <form action="{{ route('registros.update',1) }}" method="post">
                            @csrf 
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                <label for="movie">Movie</label>
                                <input type="text" class="form-control" id="movie" name="movie" placeholder="Movie">
                            </div>
                            <div class="form-group">
                                <label for="director">Director</label>
                                <input type="text" class="form-control" id="director" name="director" placeholder="Director">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Tiempo de duración</label>
                                    <input type="text" class="form-control" name="time" placeholder="Tiempo de duración">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Fecha de estreno</label>
                                    <input type="date" class="form-control" id="inputPassword4" placeholder="Fecha de estreno">
                                </div>
                            </div>
                            <div class="d-flex float-right">
                            <button type="submit" class="btn btn-success mr-2">Actualizar</button>
                            <a href="{{ route('registros.create') }}" class="btn btn-info">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection