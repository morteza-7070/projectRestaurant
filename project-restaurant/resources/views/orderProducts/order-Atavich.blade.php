<head>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite([
                 'resources/css/app.css', 'resources/scss/OrderProducts/order-hiva.scss',
                 'resources/js/app.js',
             ])
</head>
<body>

<div class="container">
    <div class="header">
        <div class="navbar-nav">
            <nav >
                <ul class="nav">
                    <li class="nav-item"><a href="/" class="nav-link">صفحه اصلی</a></li>
                    <li class="nav-item"><a href=".footer"  class="nav-link">درباره ما</a></li>
                    <li class="nav-item"><a href="tel:+989157118565" class="nav-link"><img src="../../Icon/icons8-phone-96.png" alt="" style="width: 50%;height: 50%"></a></li>
                </ul>
                <a href="{{route('cart.show')}}" class="link-shop">
                    <div class="cart">
                        <img src="../../Icon/ShopingCart01.png" alt="" class="CartIcon" >
                        <span class="body-shop">سبد خرید</span>
                        <p class="totalCount"> {{ $totalCount }}</p>
                    </div>

                </a>
            </nav>
        </div>
    </div>

    <div class="row">
        @foreach($products as $product)
            <div class="col-sm-3">
                <div class="card">
                    <img src="{{asset('storage/'.$product->image)}}" alt="">
                    <div class="card-body">
                        <div class="card-title">{{$product->name}}</div>
                        <div class="card-des">{{$product->description}}</div>
                        <form action="{{ route('cart', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="btn btn-primary">افزودن به سبد خرید
                                {{--                              <img src="images/shoping-cart2.png" alt="" class="image-icon">--}}

                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="header-footer">درباره ما</h2>
                <p class="body-footer">فست فود عطاویچ با بیش از 10 سال سابقه درخشان در صنعت غذایی با بهترین کیفیت در خدمت هم وطنان عزیز میباشد با سابقه کار در تهران و با رعایت پروتکل های بهداشتی</p>
            </div>
            <div class="col-sm-2">
                <div class="title">
                    <h2 class="title-product">محصولات</h2>
                    <ul class="body-product">
                        <li class="product-list">پیتزا</li>
                        <li class="product-list">ساندویچ</li>
                        <li class="product-list">سوخاری</li>
                        <li class="product-list">پاستا</li>

                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="contact">
                    <h2 class="contact-title">ارتباط با ما</h2>
                    <ul class="contact-body">
                        <li class="contact-list">
                            <img src="../../Icon/Home.png" alt="" class="home-icon">
                            <p class="home-paragraph">آدرس:مشهد بلوار سجاد نبش سجاد3</p>
                        </li>
                        <li class="contact-list">
                            <img src="../../Icon/email.png" alt="" class="email-icon">
                            <p class="home-paragraph">email:mortezamemariansa70@gmail.com</p>
                        </li>
                        <li class="contact-list">
                            <img src="../../Icon/phone.png" alt="" class="phone-icon">
                            <p class="home-paragraph">+9809157118565</p>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-2">
                <div class="SocialNetwork">
                    <img src="../../Icon/facebook.png" alt="" class="Icon-network">
                    <img src="../../Icon/twitter.png" alt="" class="Icon-network">
                    <img src="../../Icon/instagram.png" alt="" class="Icon-network">
                    <img src="../../Icon/google.png" alt="" class="Icon-network">


                </div>
            </div>
        </div>
    </div>

</section>

</body>

