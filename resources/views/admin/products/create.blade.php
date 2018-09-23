@extends('layouts.admin')

@section('content')




    <h1>create product</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    {!! Form::open(['method' =>'Post', 'action' => 'AdminProductsController@store' , 'files'=>'true'])  !!}

    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description','description:') !!}
        {!! Form::textarea('description',null,['class'=>'form-control','rows'=>'3' ,'required']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('price','price:') !!}
        {!! Form::text('price',null,['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id','photo:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control', 'required']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('subcategory_id','subcategory:') !!}

        {!! Form::select('subcategory_id', $cat, null, ['placeholder' => 'Pick a category...','class'=>'form-control' ]) !!}

    </div>

    <div class="form-group">

        {!! Form::submit('create product',['class'=>'btn btn-primary']) !!}
    </div>

    {{ Form::close() }}



@endsection