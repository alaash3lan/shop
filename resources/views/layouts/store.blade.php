<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Free responsive Online Store template</title>


      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
       <link href="{{asset('css/store.css')}}" rel="stylesheet">



      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>



     <script src="{{asset('js/store.js')}}"></script>


   </head>
   <body class="size-1520">
      <!-- HEADER -->
      <header>
         <div class="line">
            <div class="box">
               <div class="s-12 l-2">
                  <img class="full-img logo" src="https://ik.imagekit.io/bfrs/tr:w-200,h-50,pr-true,cm-pad_resize/image_shopfino/data/logo/Shopfino-Logo-New-1.png">
               </div>
               <div class="s-12 l-8 right">
                  <div class="margin">


                     <form  class="customform s-12 l-8" method="GET" action="{{route('search')}}">
                        <div class="s-9"><input name = "search" type="search" placeholder="Search form" title="Search form" /></div>
                        <div class="s-3"><button type="submit">Search</button></div>
                     </form>


                     <div class="s-12 l-4">
                        <p class="right cart"><i class="icon-sli-basket"></i> <b>3 items</b> / EUR 199.90</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- TOP NAV -->
         <div class="line">
            <nav>
               <p class="nav-text">Main navigation</p>
               <div class="top-nav">
                  <ul class="right">
                     <li><a href="{{url('/')}}">Home</a></li>
                     <li>
                        <a>Catalogue</a>

                        <ul>

                          <li>

                                @if($cat)
                                   @foreach($cat as $cate)

                                      <li> <a>{{$cate->name}}</a>

                                         <ul>

                                            @foreach ($cate->subcategory as $sub)

                                               <li><a href="{{route('subcategory.show',[$sub->id])}}">{{$sub->name}}</a></li>

                                            @endforeach



                                         </ul>
                                      </li>






                                      @endforeach

                                      @endif













                          </li>

                       </ul>


                     </li>
                     <li>
                        <a>Company</a>
                        <ul>
                           <li><a>About</a></li>
                           <li><a>Location</a></li>
                        </ul>
                     </li>
                     <li><a>Contact</a></li>
                  </ul>
               </div>
            </nav>
         </div>
      </header>
      <!-- ASIDE NAV AND CONTENT -->
      <div class="line">
         <div class="box margin-bottom">
            <div class="margin2x">
               <!-- ASIDE NAV -->
               <aside class="s-12 m-4 l-3 xl-2">
                  <h4 class="margin-bottom">Select Category</h4>
                  <div class="aside-nav minimize-on-small">
                     <p class="aside-nav-text">Select Category</p>



                           @if($cat)
                              @foreach($cat as $cat)
                           <ul>

                              <li>

                           <a>{{$cat->name}}</a>
                              <ul>

                                 @foreach ($cat->subcategory as $sub)

                                 <li><a href="{{route('subcategory.show',[$sub->id])}}">{{$sub->name}}</a></li>

                                 @endforeach



                           </ul>


                              </li>
                              @endforeach

                              @endif

                  </div>
               </aside>



            @yield('content')


            </div>
         </div>
      </div>
      <!-- FOOTER -->
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2018, Vision Design - graphic zoo</p>
            </div>
            <div class="s-12 l-6">
               <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a>
            </div>
         </div>
      </footer>

      <script src="{{asset('js/storesecond.js')}}"></script>


      <script type="text/javascript">
        jQuery(document).ready(function($) {
          var owl = $('#header-carousel');
          owl.owlCarousel({
            nav: false,
            dots: true,
            items: 1,
            loop: true,
            navText: ["&#xf007","&#xf006"],
            autoplay: true,
            autoplayTimeout: 3000
          });
        })
      </script>
   </body>
</html>
