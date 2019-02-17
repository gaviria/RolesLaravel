@extends('layouts.app')

@section('content')
    <div class="container">
        @include('errors.errors')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit role: {{$role->name}}</div>

                    <div class="card-body">
                        {!! Form::model($role,['route'=>['roles.update',$role->id],'method'=>'PUT']) !!}
                        @include('roles.partials.form')
                        <button class="btn btn-sm btn-primary">Actualizar</button>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection