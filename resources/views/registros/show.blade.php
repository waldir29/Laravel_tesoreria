@extends('layouts.plantilla')
@section('content')
<div class="content-body mar-top">
    <div class="container-fluid">
        <div class="row-w justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header text-center btn-grad">Lista de Registros</div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead class="bg-primary">
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark hello</td>
                                <td>Otto hello</td>
                                <td>@mdo hello</td>
                                <td class="d-flex">
                                    <a href="{{ route('edit',$id) }}" class="btn btn-sm btn-warning mr-2"><i class="far fa-edit"></i></a>
                                    <form action="{{ route('registros.destroy',$id) }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark hello</td>
                                <td>Otto hello</td>
                                <td>@mdo hello</td>
                                <td class="d-flex">
                                    <a href="{{ route('edit',2) }}" class="btn btn-sm btn-warning mr-2"><i class="far fa-edit"></i></a>
                                    <form action="{{ route('registros.destroy',2) }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection