@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    @if($users)

                        <table class="table table-striped table-responsive">
                            <tr>
                                <th>View</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created</th>
                                <th>Role</th>
                                <th>Approve</th>
                                <th>Reject</th>
                                <th>Status</th>
                            </tr>

                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at ? $user->created_at->diffForHumans() : 'not listed' }}</td>
                                <td>{{ $user->role->name }}</td>
                                <td>

                                    {!! Form::open(['method'=>'UPDATE', 'action'=>'UserController@approve']) !!}
                                    <div class="form-group">
                                        {!! Form::hidden('id', $user->id) !!}
                                        {!! Form::hidden('is_active', 1) !!}
                                        {!! Form::submit('Approve', ['class'=>"btn btn-sm btn-primary", 'style'=>'width:80px;']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    {!! Form::open(['method'=>'UPDATE', 'action'=>'UserController@approve']) !!}
                                    <div class="form-group">
                                        {!! Form::hidden('id', $user->id) !!}
                                        {!! Form::hidden('is_active', 0) !!}
                                        {!! Form::submit('Reject', ['class'=>"btn btn-sm btn-danger", 'style'=>'width:80px;']) !!}
                                    </div>
                                    {!! Form::close() !!}

                                </td>
                                <td>@if($user->is_active == 1)
                                       <span class="text-success">Activated</span>
                                    @else
                                        <span class="text-danger">Disabled</span>
                                    @endif</td>

                            </tr>

                        @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
