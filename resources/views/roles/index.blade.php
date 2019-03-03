@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('errors.errors')
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Roles <a class="btn btn-primary btn-sm float-right" href="{{route('roles.create')}}">Crear</a></div>

                    <div class="card-body">
                        <table id="roles-table" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>Slug</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function() {
            $('#roles-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('roles.datatables')}}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'slug', name: 'slug' },
                    { data: 'description', name: 'description' }
                ]
            });
        });
    </script>
@endsection
