<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> فست فود لقمه کش </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
    @vite([
                'resources/css/app.css', 'resources/scss/index/style.scss',
                'resources/js/app.js',
            ])

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />


</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              فست فود و ساندویچی
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">صفحه اصلی <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('restaurants.create')}}">ثبت نام مشتری</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('restaurants.create')}}">ثبت نام رستوران دار</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('discount')}}">لیست تخفیفات</a>
              </li>
{{--              <li class="nav-item">--}}
{{--                <a class="nav-link" href="book.html">لیست غذاها</a>--}}
{{--              </li>--}}
            </ul>
            <div class="user_option">
              <a href="" class="user_link">
                <i class="fa fa-user" aria-hidden="true">{{\Morilog\Jalali\Jalalian::now()}}</i>
              </a>
              <a class="cart_link" href="#">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <a href="{{route('restaurants.create')}}" class="order_online">
                1سفارش آنلاین
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                     فست فود لقمه کش
                    </h1>
                    <p style=" font-size: 2rem; font-weight: bolder;">
                     فست فود لقمه کش با ابسش از 30 سال سابقه کار درخشان در صنعت فست فود و با بهترین کیفین در خدمت همشهریان عزیز یباشد
                    </p>
                    <div class="btn-box">
                      <a href="{{route('Morsel')}}" class="btn1">
                        سفارش  غذا
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      فست فود هیوا
                    </h1>
                    <p style=" font-size: 2rem; font-weight: bolder;">
 فست فود هیوا با پرسنلی مجرب در خدمت همشهریان  عزیز                    </p>
                    <div class="btn-box">
                      <a href="{{route('products')}}" class="btn1">
                       سفارش غذا
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                     ساندویچی عطاویچ
                    </h1>
                    <p style=" font-size: 2rem; font-weight: bolder;">
ساندویچی عطاویچ با بیش از 15 سال سابقه کار درخحشان در تهران در خدمت همشهریان عزیز                    </p>
                    <div class="btn-box">
                      <a href="{{route('Atavitch')}}" class="btn1">
سفارش                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->

  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container ">
        <div class="row">

          <div class="col-md-6 ">
{{--           @foreach($sandwiches as $sandwich)--}}
            <div class="box ">
              <div class="img-box">
{{--                <img src="images/o1.jpg" alt="">--}}
                  <img src="{{"storage/".$sandwiches[0]->image}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
{{--                    ساندویچ همبرگر--}}
                    {{$sandwiches[0]->name}}
                </h5>
                <h6>
                    @if ($sandwiches->first()?->discount?->percentage > 0)
                        <span>{{ $sandwiches->first()?->discount->percentage }}</span>
                    @else
                        <span>بدون تخفیف</span>
                    @endif
                </h6>
                <a href="">
{{--                    @foreach ($pizzas as $pizza)--}}
                        <form action="{{ route('cart', $sandwiches->first()->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="btn ">سفارش</button>
                        </form>
{{--                    @endforeach--}}

                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                    <g>
                      <g>
                        <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                     C457.728,97.71,450.56,86.958,439.296,84.91z" />
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                      </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                  </svg>
                </a>
              </div>

            </div>

          </div>
          <div class="col-md-6  ">
            <div class="box ">

              <div class="img-box">
                  <img src="{{"storage/".$pizzas[0]->image}}" alt="">
              </div>
              <div class="detail-box">
                <h5>

                       {{$pizzas[0]->name}}

                </h5>
                <h6>

                    @if ($pizzas->first()?->discount?->percentage > 0)
                        <span>{{ $pizzas->first()?->discount->percentage }}</span>
                    @else
                        <span>بدون تخفیف</span>
                    @endif
                </h6>
                <a href="">


                        <form action="{{ route('cart', $pizzas->first()->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="btn ">سفارش</button>
                        </form>
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                    <g>
                      <g>
                        <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                     C457.728,97.71,450.56,86.958,439.296,84.91z" />
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                      </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
         لیست غذاها
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">همه</li>
        <li data-filter=".burger">ساندویچ</li>
        <li data-filter=".pizza">پیتزا</li>
        <li data-filter=".pasta">پاستا</li>
        <li data-filter=".fries">سوخاری</li>
      </ul>
        <div class="row grid">
            @foreach($pastaItems as $pasta)
            <div class="col-sm-6 col-lg-4 all  pasta">

                    <div class="cart">
                        <img src="{{asset('storage/' . $pasta->image)}}" alt="imagePasta" class="image">
                        @if(isset($pasta->discount->percentage))
                            <button class="button-1" role="button">{{ $pasta->discount->percentage}}%</button>
                        @else
                        @endif
                       <div class="cart-body">
                           <div class="cart-title">
                               <h2>{{$pasta->name}}</h2>
                           </div>
                           <div class="cart-des">
                              <p class="description">{{$pasta->description}}</p>
                           </div>
                          <div class="row">
                              <div class="col-sm-6">
                                  <div class="cart-price">

                                      @if(isset($pasta->discount) && $pasta->discount->percentage > 0)
                                          <h5>قیمت:<span class="text-title price-original">{{ $pasta->price }} ریال</span></h5>
                                          <hr>
                                          قیمت با احتساب تخفیف: <span class="price-off">{{ ($pasta->price) - ($pasta->price * ($pasta->discount->percentage / 100)) }} ریال</span>

                                      @else
                                          <h5>قیمت:<span class="text-title">{{ $pasta->price }} ریال</span></h5>
                                      @endif
                                  </div>
                                  <div class="shopping-cart">

                                      <form action="{{ route('cart', $pasta->id) }}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                          <button type="submit">
                                              <img src="images/shoping-cart2.png" alt="" class="image-icon">
                                          </button>
                                      </form>                                  </div>
                              </div>
                          </div>
                       </div>
                    </div>

            </div>
            @endforeach
                @foreach($sandwiches as $sandwich)
                    <div class="col-sm-6 col-lg-4 all  burger">

                        <div class="cart">
                            <img src="{{asset('storage/' . $sandwich->image)}}" alt="imagePasta" class="image">
                            @if(isset($sandwich->discount->percentage))
                                <button class="button-1" role="button">{{ $sandwich->discount->percentage}}%</button>
                            @else
                            @endif
                            <div class="cart-body">
                                <div class="cart-title">
                                    <h2>{{$sandwich->name}}</h2>
                                </div>
                                <div class="cart-des">
                                    <p class="description">{{$sandwich->description}}</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="cart-price">
                                            {{--                                      <div class="price">قیمت</div>--}}
                                            {{--                                      <button class="btn btn-info">تومان{{$pasta->price}}</button>--}}
                                            @if(isset($sandwich->discount) && $sandwich->discount->percentage > 0)
                                                <h5>قیمت:<span class="text-title price-original">{{ $sandwich->price }} ریال</span></h5>
                                                <hr>
                                                <h5 class="off">
                                                    قیمت با احتساب تخفیف: <span class="price-off">{{ ($sandwich->price) - ($sandwich->price * ($sandwich->discount->percentage / 100)) }} ریال</span>

                                                </h5>

                                            @else
                                                <h5>قیمت:<span class="text-title">{{ $sandwich->price }} ریال</span></h5>
                                            @endif
                                        </div>
                                        <div class="shopping-cart">

                                            <form action="{{ route('cart', $sandwich->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button type="submit">
                                                    <img src="images/shoping-cart2.png" alt="" class="image-icon">
                                                </button>
                                            </form>                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
                @foreach($pizzas as $pizza)
                    <div class="col-sm-6 col-lg-4 all  pizza">

                        <div class="cart">
                            <img src="{{asset('storage/' . $pizza->image)}}" alt="imagePasta" class="image">
                            @if(isset($pizza->discount->percentage))
                                <button class="button-1" role="button">{{ $pizza->discount->percentage}}%</button>
                            @else
                            @endif
                            <div class="cart-body">
                                <div class="cart-title">
                                    <h2>{{$pizza->name}}</h2>
                                </div>
                                <div class="cart-des">
                                    <p class="description">{{$pizza->description}}</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="cart-price">
                                            {{--                                      <div class="price">قیمت</div>--}}
                                            {{--                                      <button class="btn btn-info">تومان{{$pasta->price}}</button>--}}
                                            @if(isset($pizza->discount) && $pizza->discount->percentage > 0)
                                                <h5>قیمت:<span class="text-title price-original">{{ $pizza->price }} ریال</span></h5>
                                                <hr>
                                                قیمت با احتساب تخفیف: <span class="price-off">{{ ($pizza->price) - ($pizza->price * ($pizza->discount->percentage / 100)) }} ریال</span>

                                            @else
                                                <h5>قیمت:<span class="text-title">{{ $pizza->price }} ریال</span></h5>
                                            @endif
                                        </div>
                                        <div class="shopping-cart">

                                            <form action="{{ route('cart', $pizza->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button type="submit">
                                                    <img src="images/shoping-cart2.png" alt="" class="image-icon">
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
                @foreach($friedItems as $fried)
                    <div class="col-sm-6 col-lg-4 all  fries">

                        <div class="cart">
                            <img src="{{asset('storage/' . $fried->image)}}" alt="imagePasta" class="image">
                            @if(isset($fried->discount->percentage))
                                <button class="button-1" role="button">{{ $fried->discount->percentage}}%</button>
                            @else
                            @endif
                            <div class="cart-body">
                                <div class="cart-title">
                                    <h2>{{$fried->name}}</h2>
                                </div>
                                <div class="cart-des">
                                    <p class="description">{{$fried->description}}</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="cart-price">
                                            {{--                                      <div class="price">قیمت</div>--}}
                                            {{--                                      <button class="btn btn-info">تومان{{$pasta->price}}</button>--}}
                                            @if(isset($fried->discount) && $fried->discount->percentage > 0)
                                                <h5>قیمت:<span class="text-title price-original">{{ $fried->price }} ریال</span></h5>
                                                <hr>
                                                قیمت با احتساب تخفیف: <span class="price-off">{{ ($fried->price) - ($fried->price * ($fried->discount->percentage / 100)) }} ریال</span>

                                            @else
                                                <h5>قیمت:<span class="text-title">{{ $fried->price }} ریال</span></h5>
                                            @endif
                                        </div>
                                        <div class="shopping-cart">

                                            <form action="{{ route('cart', $fried->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button type="submit">
                                                    <img src="images/shoping-cart2.png" alt="" class="image-icon">
                                                </button>
                                            </form>                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach

        </div>

    </div>


  </section>


{{--      <div class="filters-content">--}}
{{--        <div class="row grid">--}}


{{--          <div class="col-sm-6 col-lg-4 all pasta">--}}
{{--            <div class="box">--}}
{{--                @foreach($pastaItems as $pasta)--}}
{{--              <div>--}}
{{--                <div class="img-box">--}}
{{--                    <img src="{{ asset('storage/' .  $pasta->image) }}" alt="pasta" style="width: 100%">--}}
{{--                </div>--}}
{{--                <div class="detail-box">--}}
{{--                  <h5>--}}
{{--                   پیتزا مخلوط--}}
{{--                      {{$pasta->name}}--}}
{{--                  </h5>--}}
{{--                    <p>{{$pasta->description}}</p>--}}
{{--                  <div class="options">--}}
{{--                    <h6>--}}

{{--                    </h6>--}}
{{--                    <a href="">--}}
{{--                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248--}}
{{--                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48--}}
{{--                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064--}}
{{--                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4--}}
{{--                         C457.728,97.71,450.56,86.958,439.296,84.91z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296--}}
{{--                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                      </svg>--}}
{{--                    </a>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--              @endforeach--}}
{{--          </div>--}}
{{--          <div class="col-sm-6 col-lg-4 all burger">--}}
{{--              <div class="box">--}}
{{--                  <div>--}}
{{--                      <div class="img-box">--}}
{{--                          <img src="images/f1.png" alt="">--}}
{{--                      </div>--}}
{{--                      <div class="detail-box">--}}
{{--                          <h5>--}}
{{--                             پیتزا مخصوص--}}
{{--                          </h5>--}}
{{--                          <p>--}}
{{--                              مواد تشکیل‌دهنده این پیتزا معمولاً همان سوسیس و گوشت چرخ‌کرده و فلفل دلمه و ذرت و زیتون و… هستند که ممکن است در فست‌فودهای مختلف این مواد باهم متفاوت باشند.                          </p>--}}
{{--                          <div class="options">--}}
{{--                              <h6>--}}
{{--                                  146500--}}
{{--                              </h6>--}}
{{--                              <a href="">--}}
{{--                                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">--}}
{{--                        <g>--}}
{{--                            <g>--}}
{{--                                <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248--}}
{{--                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />--}}
{{--                            </g>--}}
{{--                        </g>--}}
{{--                                      <g>--}}
{{--                                          <g>--}}
{{--                                              <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48--}}
{{--                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064--}}
{{--                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4--}}
{{--                         C457.728,97.71,450.56,86.958,439.296,84.91z" />--}}
{{--                                          </g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                          <g>--}}
{{--                                              <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296--}}
{{--                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />--}}
{{--                                          </g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                      </svg>--}}
{{--                              </a>--}}
{{--                          </div>--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--            <div class="col-sm-6 col-lg-4 all burger">--}}
{{--            <div class="box mt-4">--}}
{{--              <div>--}}
{{--                <div class="img-box">--}}
{{--                  <img src="images/مارگاریتا.png" alt="">--}}
{{--                </div>--}}
{{--                <div class="detail-box">--}}
{{--                  <h5>--}}
{{--                    پیتزا مارگاریتا--}}
{{--                  </h5>--}}
{{--                  <p>--}}
{{--                      مواد تشکیل‌دهنده پیتزا مارگاریتا، معمولاً گوجه، پنیر پیتزا، روغن‌زیتون و ریحان هستند و البته پیتزا مارگاریتا دارای خمیر مخصوصی نیز هست که باید به‌خوبی تهیه شود تا بتوانید از خوردن این پیتزا لذت بیشتری ببرید.                  </p>--}}
{{--                  <div class="options">--}}
{{--                    <h6>--}}
{{--                      189500تومان--}}
{{--                    </h6>--}}
{{--                    <a href="">--}}
{{--                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248--}}
{{--                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48--}}
{{--                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064--}}
{{--                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4--}}
{{--                         C457.728,97.71,450.56,86.958,439.296,84.91z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296--}}
{{--                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                      </svg>--}}
{{--                    </a>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-sm-6 col-lg-4 all pizza">--}}
{{--              <div class="box">--}}
{{--                  <div>--}}
{{--                      <div class="img-box">--}}
{{--                          <img src="images/پپرونی.png" alt="">--}}
{{--                      </div>--}}
{{--                      <div class="detail-box">--}}
{{--                          <h5>--}}
{{--                             پیتزا پپرونی--}}
{{--                          </h5>--}}
{{--                          <p>--}}
{{--                              مواد تشکیل‌دهنده این پیتزا در کل پپرونی، گوجه، فلفل دلمه و پنیر پیتزا هستند؛ اما ممکن است در برخی رستوران‌ها مواد دیگری نیز مشاهده کنید و طعم‌های جدیدتری از این ترکیب به چشمتان بخورد.                          </p>--}}
{{--                          <div class="options">--}}
{{--                              <h6>--}}
{{--                                  185000تومان--}}
{{--                              </h6>--}}
{{--                              <a href="">--}}
{{--                                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">--}}
{{--                        <g>--}}
{{--                            <g>--}}
{{--                                <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248--}}
{{--                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />--}}
{{--                            </g>--}}
{{--                        </g>--}}
{{--                                      <g>--}}
{{--                                          <g>--}}
{{--                                              <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48--}}
{{--                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064--}}
{{--                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4--}}
{{--                         C457.728,97.71,450.56,86.958,439.296,84.91z" />--}}
{{--                                          </g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                          <g>--}}
{{--                                              <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296--}}
{{--                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />--}}
{{--                                          </g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                                      <g>--}}
{{--                                      </g>--}}
{{--                      </svg>--}}
{{--                              </a>--}}
{{--                          </div>--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--          </div>--}}

{{--            <div class="col-sm-6 col-lg-4 all burger">--}}
{{--            <div class="box">--}}
{{--              <div>--}}
{{--                <div class="img-box">--}}
{{--                  <img src="images/استیک.png" alt="">--}}
{{--                </div>--}}
{{--                <div class="detail-box">--}}
{{--                  <h5>--}}
{{--                   پیتزا استیک--}}
{{--                  </h5>--}}
{{--                  <p>--}}
{{--                      از مواد تشکیل‌دهنده پیتزا استیک، می‌توان به استیک، سیر، پیاز، فلفل‌دلمه‌ای، گوجه، قارچ و… اشاره کرد؛ اما طبق معمول ممکن است در رستوران‌های مختلف شاهد این باشید که روش پخت دیگری وجود دارد و مواد پیتزا نیز تغییر کرده‌اند.                  </p>--}}
{{--                  <div class="options">--}}
{{--                    <h6>--}}
{{--                      255000تومان--}}
{{--                    </h6>--}}
{{--                    <a href="">--}}
{{--                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248--}}
{{--                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48--}}
{{--                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064--}}
{{--                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4--}}
{{--                         C457.728,97.71,450.56,86.958,439.296,84.91z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296--}}
{{--                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                      </svg>--}}
{{--                    </a>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--            <div class="col-sm-6 col-lg-4 all burger">--}}
{{--                <div class="box">--}}
{{--                    <div>--}}
{{--                        <div class="img-box">--}}
{{--                            <img src="images/images.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="detail-box">--}}
{{--                            <h5>--}}
{{--                                Delicious Pizza12--}}
{{--                            </h5>--}}
{{--                            <p>--}}
{{--                                Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque--}}
{{--                            </p>--}}
{{--                            <div class="options">--}}
{{--                                <h6>--}}
{{--                                    $17--}}
{{--                                </h6>--}}
{{--                                <a href="">--}}
{{--                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">--}}
{{--                        <g>--}}
{{--                            <g>--}}
{{--                                <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248--}}
{{--                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />--}}
{{--                            </g>--}}
{{--                        </g>--}}
{{--                                        <g>--}}
{{--                                            <g>--}}
{{--                                                <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48--}}
{{--                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064--}}
{{--                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4--}}
{{--                         C457.728,97.71,450.56,86.958,439.296,84.91z" />--}}
{{--                                            </g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                            <g>--}}
{{--                                                <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296--}}
{{--                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />--}}
{{--                                            </g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                      </svg>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 col-lg-4 all burger">--}}
{{--                <div class="box">--}}
{{--                    <div>--}}
{{--                        <div class="img-box">--}}
{{--                            <img src="images/images.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="detail-box">--}}
{{--                            <h5>--}}
{{--                                Delicious Pizza--}}
{{--                            </h5>--}}
{{--                            <p>--}}
{{--                                Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque--}}
{{--                            </p>--}}
{{--                            <div class="options">--}}
{{--                                <h6>--}}
{{--                                    $17--}}
{{--                                </h6>--}}
{{--                                <a href="">--}}
{{--                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">--}}
{{--                        <g>--}}
{{--                            <g>--}}
{{--                                <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248--}}
{{--                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />--}}
{{--                            </g>--}}
{{--                        </g>--}}
{{--                                        <g>--}}
{{--                                            <g>--}}
{{--                                                <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48--}}
{{--                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064--}}
{{--                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4--}}
{{--                         C457.728,97.71,450.56,86.958,439.296,84.91z" />--}}
{{--                                            </g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                            <g>--}}
{{--                                                <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296--}}
{{--                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />--}}
{{--                                            </g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                      </svg>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-6 col-lg-4 all burger">--}}
{{--                <div class="box">--}}
{{--                    <div>--}}
{{--                        <div class="img-box">--}}
{{--                            <img src="images/images.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="detail-box">--}}
{{--                            <h5>--}}
{{--                                Delicious Pizza1--}}
{{--                            </h5>--}}
{{--                            <p>--}}
{{--                                Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque--}}
{{--                            </p>--}}
{{--                            <div class="options">--}}
{{--                                <h6>--}}
{{--                                    $17--}}
{{--                                </h6>--}}
{{--                                <a href="">--}}
{{--                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">--}}
{{--                        <g>--}}
{{--                            <g>--}}
{{--                                <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248--}}
{{--                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />--}}
{{--                            </g>--}}
{{--                        </g>--}}
{{--                                        <g>--}}
{{--                                            <g>--}}
{{--                                                <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48--}}
{{--                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064--}}
{{--                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4--}}
{{--                         C457.728,97.71,450.56,86.958,439.296,84.91z" />--}}
{{--                                            </g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                            <g>--}}
{{--                                                <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296--}}
{{--                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />--}}
{{--                                            </g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                      </svg>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--          <div class="col-sm-6 col-lg-4 all pizza">--}}
{{--            <div class="box">--}}
{{--                @foreach($pizzas as $pizza)--}}
{{--              <div>--}}
{{--                <div class="img-box">--}}
{{--                    <img src="{{asset('storage/' . $pizza->id)}}" alt="pizza">                </div>--}}
{{--                <div class="detail-box">--}}
{{--                  <h5>--}}
{{--                    {{$pizza->name}}--}}
{{--                  </h5>--}}
{{--                  <p>--}}
{{--{{$pizza->description}}                  </p>--}}
{{--                  <div class="options">--}}
{{--                      <div>--}}
{{--                          @if(isset($pizza->discount) && $pizza->discount->percentage > 0)--}}
{{--                              <h5>قیمت:<span class="text-title price-original">{{ $pizza->price }} ریال</span></h5>--}}
{{--                              <hr>--}}
{{--                              قیمت با احتساب تخفیف: <span class="price-off">{{ ($pizza->price - ($pizza->price * ($pizza->discount->percentage / 100))) }} ریال</span>--}}
{{--                          @else--}}
{{--                              <h5>قیمت:<span class="text-title">{{ $pizza->price }} ریال</span></h5>--}}
{{--                          @endif--}}
{{--                      </div>--}}
{{--                    <a href="">--}}
{{--                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248--}}
{{--                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48--}}
{{--                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064--}}
{{--                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4--}}
{{--                         C457.728,97.71,450.56,86.958,439.296,84.91z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296--}}
{{--                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                      </svg>--}}
{{--                    </a>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--              @endforeach--}}
{{--          </div>--}}
{{--          <div class="col-sm-6 col-lg-4 all fries">--}}
{{--            <div class="box">--}}
{{--                @foreach($friedItems as $fried)--}}
{{--              <div>--}}
{{--                <div class="img-box">--}}
{{--                    <img src="{{ asset('storage/' .  $fried->image) }}" alt="fried" style="width: 100%">--}}
{{--                </div>--}}
{{--                <div class="detail-box">--}}
{{--                  <h5>--}}
{{--                    {{$fried->name}}--}}
{{--                  </h5>--}}
{{--                  <p>--}}
{{--{{$fried->description}}                  </p>--}}
{{--                  <div class="options">--}}
{{--                    <h6>--}}
{{--                        {{$fried->price}}--}}
{{--                    </h6>--}}
{{--                    <a href="">--}}
{{--                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248--}}
{{--                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48--}}
{{--                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064--}}
{{--                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4--}}
{{--                         C457.728,97.71,450.56,86.958,439.296,84.91z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296--}}
{{--                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                      </svg>--}}
{{--                    </a>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--          </div>--}}
{{--            <div class="col-sm-6 col-lg-4 all fries">--}}
{{--                <div class="box">--}}
{{--                    <div>--}}
{{--                        <div class="img-box">--}}
{{--                            <img src="images/f5.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="detail-box">--}}
{{--                            <h5>--}}
{{--                                French Fries--}}
{{--                            </h5>--}}
{{--                            <p>--}}
{{--                                Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque--}}
{{--                            </p>--}}
{{--                            <div class="options">--}}
{{--                                <h6>--}}
{{--                                    $10--}}
{{--                                </h6>--}}
{{--                                <a href="">--}}
{{--                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">--}}
{{--                        <g>--}}
{{--                            <g>--}}
{{--                                <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248--}}
{{--                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />--}}
{{--                            </g>--}}
{{--                        </g>--}}
{{--                                        <g>--}}
{{--                                            <g>--}}
{{--                                                <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48--}}
{{--                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064--}}
{{--                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4--}}
{{--                         C457.728,97.71,450.56,86.958,439.296,84.91z" />--}}
{{--                                            </g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                            <g>--}}
{{--                                                <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296--}}
{{--                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />--}}
{{--                                            </g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                                        <g>--}}
{{--                                        </g>--}}
{{--                      </svg>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--          <div class="col-sm-6 col-lg-4 all pizza">--}}
{{--            <div class="box">--}}
{{--              <div>--}}
{{--                <div class="img-box">--}}
{{--                  <img src="images/f6.png" alt="">--}}
{{--                </div>--}}
{{--                <div class="detail-box">--}}
{{--                  <h5>--}}
{{--                    Delicious Pizza--}}
{{--                  </h5>--}}
{{--                  <p>--}}
{{--                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque--}}
{{--                  </p>--}}
{{--                  <div class="options">--}}
{{--                    <h6>--}}
{{--                      $15--}}
{{--                    </h6>--}}
{{--                    <a href="">--}}
{{--                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248--}}
{{--                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48--}}
{{--                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064--}}
{{--                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4--}}
{{--                         C457.728,97.71,450.56,86.958,439.296,84.91z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296--}}
{{--                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                      </svg>--}}
{{--                    </a>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-sm-6 col-lg-4 all burger">--}}
{{--            <div class="box">--}}
{{--              <div>--}}
{{--                <div class="img-box">--}}
{{--                  <img src="images/f7.png" alt="">--}}
{{--                </div>--}}
{{--                <div class="detail-box">--}}
{{--                  <h5>--}}
{{--                    Tasty Burger--}}
{{--                  </h5>--}}
{{--                  <p>--}}
{{--                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque--}}
{{--                  </p>--}}
{{--                  <div class="options">--}}
{{--                    <h6>--}}
{{--                      $12--}}
{{--                    </h6>--}}
{{--                    <a href="">--}}
{{--                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248--}}
{{--                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48--}}
{{--                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064--}}
{{--                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4--}}
{{--                         C457.728,97.71,450.56,86.958,439.296,84.91z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296--}}
{{--                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                      </svg>--}}
{{--                    </a>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-sm-6 col-lg-4 all burger">--}}
{{--            <div class="box">--}}
{{--              <div>--}}
{{--                <div class="img-box">--}}
{{--                  <img src="images/f8.png" alt="">--}}
{{--                </div>--}}
{{--                <div class="detail-box">--}}
{{--                  <h5>--}}
{{--                    Tasty Burger--}}
{{--                  </h5>--}}
{{--                  <p>--}}
{{--                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque--}}
{{--                  </p>--}}
{{--                  <div class="options">--}}
{{--                    <h6>--}}
{{--                      $14--}}
{{--                    </h6>--}}
{{--                    <a href="">--}}
{{--                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248--}}
{{--                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48--}}
{{--                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064--}}
{{--                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4--}}
{{--                         C457.728,97.71,450.56,86.958,439.296,84.91z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296--}}
{{--                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                      </svg>--}}
{{--                    </a>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-sm-6 col-lg-4 all pasta">--}}
{{--            <div class="box">--}}
{{--              <div>--}}
{{--                <div class="img-box">--}}
{{--                  <img src="images/f9.png" alt="">--}}
{{--                </div>--}}
{{--                <div class="detail-box">--}}
{{--                  <h5>--}}
{{--                    Delicious Pasta--}}
{{--                  </h5>--}}
{{--                  <p>--}}
{{--                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque--}}
{{--                  </p>--}}
{{--                  <div class="options">--}}
{{--                    <h6>--}}
{{--                      $10--}}
{{--                    </h6>--}}
{{--                    <a href="">--}}
{{--                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248--}}
{{--                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48--}}
{{--                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064--}}
{{--                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4--}}
{{--                         C457.728,97.71,450.56,86.958,439.296,84.91z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                          <g>--}}
{{--                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296--}}
{{--                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />--}}
{{--                          </g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                        <g>--}}
{{--                        </g>--}}
{{--                      </svg>--}}
{{--                    </a>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <div class="btn-box">--}}
{{--        <a href="">--}}
{{--          View More--}}
{{--        </a>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--      <div class="row">--}}
{{--          --}}
{{--      </div>--}}
{{--  </section>--}}

  <!-- end food section -->


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                We Are Feane
              </h2>
            </div>

            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Book A Table
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" class="form-control" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your Email" />
              </div>
              <div>
                <select class="form-control nice-select wide">
                  <option value="" disabled selected>
                    How many persons?
                  </option>
                  <option value="">
                    2
                  </option>
                  <option value="">
                    3
                  </option>
                  <option value="">
                    4
                  </option>
                  <option value="">
                    5
                  </option>
                </select>
              </div>
              <div>
                <input type="date" class="form-control">
              </div>
              <div class="btn_box">
                <button>
                  Book Now
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          What Says Our Customers
        </h2>
      </div>
      <div class="carousel-wrap row ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <h6>
                  Moana Michell
                </h6>
                <p>
                  magna aliqua
                </p>
              </div>
              <div class="img-box">
                <img src="images/client1.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <h6>
                  Mike Hamell
                </h6>
                <p>
                  magna aliqua
                </p>
              </div>
              <div class="img-box">
                <img src="images/client2.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Feane
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a><br><br>
          &copy; <span id="displayYear"></span> Distributed By
          <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>
