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
                <label>
                    {!! Form::checkbox('roles[]',$role->id, null) !!}
                    {{$role->name}}
                    <em>({{$role->description ?: 'N/A'}})</em>
                </label>
            </li>
        @endforeach
    </ul>
</div>
