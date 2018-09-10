@extends('layouts.store')

@section('content')


    <!-- CONTENT -->
    <section class="s-12 m-8 l-9 xl-10">
        <!-- CAROUSEL -->
    {{--<div class="line hide-s">--}}
    {{--<div id="header-carousel" class="owl-carousel owl-theme">--}}
    {{--<div class="item"><img src="img/header-1.svg" alt=""></div>--}}
    {{--<div class="item"><img src="img/header-2.svg" alt=""></div>--}}
    {{--<div class="item"><img src="img/header-3.svg" alt=""></div>--}}
    {{--</div>--}}
    {{--</div>                  --}}
    <!-- Breadcrumb -->




        <h1 class="margin-bottom">Products</h1>
        <!-- Pruducts -->
       <h3> <a href="{{url('/?popular')}}">sort by popularity</a></h3>
        <h3> <a href="{{url('/?price')}}">sort by price</a></h3>
        <div class="margin2x">




            @if($products)

                @foreach($products as $product)

          <div class="s-12 m-12 l-4 xl-3 xxl-3">
          <a href="{{route('product.show',[$product->id])}}"><img class="full-img" src="{{ asset('images/'. $product->photo->file)}}"></a>
            <h5>{{$product->name}}</h5>
            <h5>{{$product->price}}$</h5>
              {{--<a href="/"><h4 class="margin-bottom"><strong>{{$product->description}}</strong></h4></a>--}}
            <p class="margin-bottom">{{$product->description}}</p>


                    <form class="customform s-12 margin-bottom2x" method="POST" action="{{route('cart.store')}}">
{{csrf_field()}}                          <input type="hidden" name="id" value="{{$product->id}}">
<input type="hidden" name="name" value="{{$product->name}}">
<input type="hidden" name="price" value="{{$product->price}}">
                            <div><button class="button rounded-btn submit-btn s-12" type="submit">Add to Cart</button></div>
                        </form>
                    </div>


                @endforeach
            @endif





        </div>
    </section>



@endsection
