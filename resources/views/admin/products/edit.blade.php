@extends('layouts.admin')

@section('content')



    <h1>edit product</h1>

    {!! Form::model($product, ['method' =>'PATCH', 'action' => ['AdminProductsController@update' ,$product->id], 'files'=>'true'])  !!}

    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',$product->name,['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description','description:') !!}
        {!! Form::textarea('description',$product->description,['class'=>'form-control','rows'=>'3' ,'required']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('price','price:') !!}
        {!! Form::text('price',$product->price,['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id','photo:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('subcategory_id','subcategory:') !!}

        {!! Form::select('subcategory_id', $cat, null, ['class'=>'form-control' ]) !!}

    </div>

    <div class="form-group">

        {!! Form::submit('save',['class'=>'btn btn-primary']) !!}
    </div>

    {{ Form::close() }}


    {{-- dssssssssssssssssssssssss--}}

        {!! Form::model($product, ['method' =>'DELETE', 'action' => ['AdminProductsController@destroy' ,$product->id] ])  !!}



        <div class="form-group">

            {!! Form::submit('delete',['class'=>'btn btn-primary']) !!}
        </div>

        {{ Form::close() }}



@endsection