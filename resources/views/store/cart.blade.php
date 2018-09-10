@extends('layouts.store')

@section('content')


<div class="col-md-9" >
              <div class="box">
                  <h1>Order </h1>


                  <div class="card-header" style="width: 751px; height: 284px; margin-left: 249px; ">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th colspan="2">Product</th>
                                  <th>Quantity</th>
                                  <th> price</th>

                              </tr>
                          </thead>
                          <tbody>
                            @if(Cart::count() != 0)
                              @foreach(Cart::content() as $item)

                              <tr>


                                      <th colspan="2"> <a href="#">{{$item->name}}</a></th>
                                  <td>1</td>
                                  <td>{{$item->price}}</td>


                              </tr>
                              @endforeach
                                @endif
                          </tbody>


                      </table>


                      <div class="">
                        <h1>shippin</h1>
                      </div>

                  </div>

                  <hr>


              </div>
          </div>


@endsection
