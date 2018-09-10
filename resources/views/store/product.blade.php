@extends('layouts.store')

@section('content')



    <section class="s-12 m-8 l-9 xl-10">

    {{--<div class="line hide-s">--}}
    {{--<div id="header-carousel" class="owl-carousel owl-theme">--}}
    {{--<div class="item"><img src="img/header-1.svg" alt=""></div>--}}
    {{--<div class="item"><img src="img/header-2.svg" alt=""></div>--}}
    {{--<div class="item"><img src="img/header-3.svg" alt=""></div>--}}
    {{--</div>--}}
    {{--</div>                  --}}

        <nav class="breadcrumb-nav">
            <ul>
                <li><a href="/"><i class="icon-sli-home"></i></a></li>
                <li><a href="/">Catalogue</a></li>
                <li><a href="/">First Category</a></li>
                <li><span>Sub Category 1</span></li>
            </ul>
        </nav>



        <h1 class="margin-bottom"> {{$pro->name}}  </h1>



        <div class="col-md-8">


            @if($pro)



                    <div class="s-12 m-12 l-4 xl-3 xxl-3">
                        <a href="#"><img  class="full-img" src="{{ asset('images/'. $pro->photo->file)}}"></a>
                        <h5>{{$pro->name}}</h5>
                        <h5>{{$pro->price}}$</h5>
                        <a href="/"><h4 class="margin-bottom"><strong>{{$pro->description}}</strong></h4></a>
                        <p class="margin-bottom">{{$pro->description}}</p>
                        <form class="customform s-12 margin-bottom2x" method="POST" action="{{route('cart.store')}}">
{{csrf_field()}}                          <input type="hidden" name="id" value="{{$pro->id}}">
<input type="hidden" name="name" value="{{$pro->name}}">
<input type="hidden" name="price" value="{{$pro->price}}">
                            <div><button class="button rounded-btn submit-btn s-12" type="submit">Add to Cart</button></div>
                        </form>
                    </div>



            @endif





        </div>
    </section>



@endsection
