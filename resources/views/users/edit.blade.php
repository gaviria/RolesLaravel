@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit user: {{$user->name}}</div>

                    <div class="card-body">
                        {!! Form::model($user,['route'=>['users.update',$user->id],'method'=>'PUT']) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Name:', ['class' => 'awesome']) !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'E-mail:', ['class' => 'awesome']) !!}
                                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                            </div>
                            <hr>
                            <h3>Lista de Roles</h3>
                            <div class="form-group">
                                <ul class="list-unstyled">
                                    @foreach($roles as $role)
                                        <li>
                                            <label for="">
                                                {!! Form::checkbox('roles[]',$role->id, null) !!}
                                                {{$role->name}}
                                                <em>({{$role->description ?: 'N/A'}})</em>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <button class="btn btn-sm btn-primary">Actualizar</button>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection