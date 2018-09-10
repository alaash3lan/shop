@extends('layouts.admin')

@section('content')


    <div class="container">
        <h2>admins</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>

                <th>Created at</th>
            </tr>
            </thead>
            <tbody>
            @if($sub)

                @foreach($sub as $category)

                    <tr>
                        <td>{{$category->name}}</td>

                        <td>{{$category->created_at}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>

        </table>

    </div>


    <div class="container">


        {!! Form::open(['method' =>'Post', 'action' => 'SubcategoriesController@store'])  !!}

        <div class="form-group">
            {!! Form::label('name','name:') !!}
            {!! Form::text('name',null,['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id','category:') !!}

            {!! Form::select('category_id', $cat, null, ['placeholder' => 'Pick a category...','class'=>'form-control' ]) !!}

        </div>

        <div class="form-group">

            {!! Form::submit('create category',['class'=>'btn btn-primary']) !!}
        </div>

        {{ Form::close() }}

    </div>

@endsection


