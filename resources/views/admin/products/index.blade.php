@extends('layouts.admin')

@section('content')


    <div class="container">
        <h2>admins</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>description</th>
                <th>price</th>
                <th>photo</th>

                <th>category</th>
                <th>views</th>


                <th>author</th>
                <th>Created at</th>
            </tr>
            </thead>
            <tbody>
            @if($products)

                @foreach($products as $product)

                    <tr>
                        <td><a href="{{route('products.edit' ,$product)}}">{{$product->name}}</a></td>
                        <td>{{str_limit($product->description, 30)}}</td>
                        <td>{{$product->price}}</td>
                        <td><img height="60" src="{{ asset('images/'. $product->photo->file)}}" alt=""></td>
                        <td>{{$product->subcategory->name}}</td>
                        <td>{{$product->views}}</td>

                        <td>{{$product->user->name}}</td>
                        <td>{{$product->created_at}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection


