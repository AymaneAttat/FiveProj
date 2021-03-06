@extends('layouts.admin')

@section('title', '| Permissions')

@section('content')
<br>

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-key"></i>Available Permissions

    <a href="{{ route('users.index') }}" class="btn btn-default float-right">Users</a>
    <a href="{{ route('roles.index') }}" class="btn btn-default float-right">Roles</a></h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td> 
                    <td>
                    <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info float-left" style="margin-right: 3px;">Modifier</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                    {!! Form::submit('Supprime', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Ajouter Permission</a>

</div>

@endsection