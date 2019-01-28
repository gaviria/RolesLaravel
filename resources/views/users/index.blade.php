@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Users</div>

                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>Email</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        @can('users.show')
                                            <a class="btn btn-sm btn-secondary" href="{{route('users.show', $user->id)}}">Mostrar</a>
                                        @endcan
                                        @can('users.edit')
                                        <a class="btn btn-sm btn-secondary" href="{{route('users.edit', $user->id)}}">Editar</a>
                                        @endcan
                                        @can('users.destroy')
                                        {!! Form::open(['route'=>['users.destroy',$user->id], 'method'=>'DELETE']) !!}
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
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
