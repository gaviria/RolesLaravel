@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data from Role: {{$role->name}}</div>

                    <div class="card-body">
                        <p><strong>Id: </strong>{{$role->id}}</p>
                        <p><strong>Name: </strong>{{$role->name}}</p>
                        <p><strong>Email: </strong>{{$role->slug}}</p>
                        <p><strong>Email: </strong>{{$role->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection