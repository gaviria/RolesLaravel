@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Roles <a class="btn btn-primary btn-sm float-right" href="{{route('roles.create')}}">Crear</a></div>

                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->slug}}</td>
                                    <td>{{$role->description}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            @can('roles.show')
                                                <a class="btn btn-sm btn-secondary" href="{{route('roles.show', $role->id)}}">Mostrar</a>
                                            @endcan
                                            @can('roles.edit')
                                                <a class="btn btn-sm btn-secondary" href="{{route('roles.edit', $role->id)}}">Editar</a>
                                            @endcan
                                            @can('roles.destroy')
                                                {!! Form::open(['route'=>['roles.destroy',$role->id], 'method'=>'DELETE']) !!}
                                                <button class="btn btn-danger btn-sm">Eliminar</button>
                                                {!! Form::close() !!}
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- Pie de pagina de usuarios -->
                        {{$roles->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
