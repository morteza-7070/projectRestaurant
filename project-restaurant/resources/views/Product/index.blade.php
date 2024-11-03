<head>

    <link rel="stylesheet" href="../../css/Cririeshing/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite([
                 'resources/css/app.css', 'resources/scss/Product/style.scss',
                 'resources/js/app.js',
             ])

</head>
<div class="container">
    <div class="header">
        <div class="navbar-nav">
            <ul class="nav">
                <li class="list-item"><a href="" class="link-item">صفحه اصلی</a></li>
                <li class="list-item"><a href="" class="link-item">محصولات </a></li>
                <li class="list-item"><a href="" class="link-item">ایجاد محصول </a></li>

            </ul>
            <div class="header-title">
                <div class="row">
                    <div class="col-sm-9">
                        <h2>لذت بی پایان طعم ها در فست فود ما </h2>
                        <p class="header-body">در فست فود به شما بهترین فست فودها را با مواد تازه و باکیفیت ارائه می‌دهیم. از همبرگرهای خوشمزه تا پیتزاهای داغ، هر لقمه یک سفر به دنیای طعم‌هاست. بیایید و لذت ببرید!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product">
        <div class="row grid">
            @foreach($products as $product)
                <div class="col-sm-6 col-lg-4 all  pasta">

                    <div class="cart">
                        <img src="{{asset('storage/' . $product->image)}}" alt="imagePasta" class="image">
                        @if(isset($product->discount->percentage))
                            <button class="button-1" role="button">{{ $product->discount->percentage}}%</button>
                        @else
                        @endif
                        <div class="cart-body">
                            <div class="cart-title">
                                <h2>{{$product->name}}</h2>
                            </div>
                            <div class="cart-des">
                                <p class="description">{{$product->description}}</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="cart-price">
                                        {{--                                      <div class="price">قیمت</div>--}}
                                        {{--                                      <button class="btn btn-info">تومان{{$pasta->price}}</button>--}}
                                        @if(isset($product->discount) && $product->discount->percentage > 0)
                                            <h5>قیمت:<span class="text-title price-original">{{ $product->price }} ریال</span></h5>
                                            <hr>
                                            قیمت با احتساب تخفیف: <span class="price-off">{{ ($product->price) - ($product->price * ($product->discount->percentage / 100)) }} ریال</span>

                                        @else
                                            <h5>قیمت:<span class="text-title">{{ $product->price }} ریال</span></h5>
                                        @endif
                                    </div>
                                    <div class="shopping-cart">

                                        <a href=""><img src="images/shoping-cart2.png" alt="" class="image-icon"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
    </div>
</div>


