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
                    <li class="nav-item"><a href="" class="nav-link">درباره ما</a></li>
                    <li class="nav-item"><a href="tel:+989157118565" class="nav-link"><img src="../../Icon/icons8-phone-96.png" alt="" style="width: 50%;height: 50%"></a></li>
                </ul>
               @foreach($cart->products as $item)
                    <a href="{{route('cart.show')}}" class="link-shop">
                       <div class="cart">
                           <img src="../../Icon/ShopingCart01.png" alt="" class="CartIcon" >
                           <span class="body-shop">سبد خرید</span>
                           <p class="totalCount"> {{ $totalCount }}</p>
                       </div>

                    </a>
               @endforeach
            </nav>
        </div>
    </div>
    <div class="body">
        <div class="row grid">
            @foreach($products as $product)
                <p>{{$product->name}}</p>
            @endforeach

    </div>
</div>
</body>
