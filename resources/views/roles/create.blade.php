@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Role</div>

                    <div class="card-body">
                        {!! Form::open(['route'=>['roles.store'],'method'=>'POST']) !!}
                        @include('roles.partials.form')
                        <button class="btn btn-sm btn-primary">Guardar</button>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection