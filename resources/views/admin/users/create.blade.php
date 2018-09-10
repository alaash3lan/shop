@extends('layouts.admin')

@section('content')




    <h1>create user</h1>

    {!! Form::open(['method' =>'Post', 'action' => 'AdminUsersController@store'])  !!}

    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::text('password',null,['class'=>'form-control', 'required']) !!}
    </div>



    <div class="form-group">
        {!! Form::label('role_id','role_id:') !!}
        {!! Form::select('role_id', ['1' => 'admin', '2' => 'subscriber', ]) !!}

    </div>

    <div class="form-group">

        {!! Form::submit('create user',['class'=>'btn btn-primary']) !!}
    </div>

    {{ Form::close() }}



@endsection