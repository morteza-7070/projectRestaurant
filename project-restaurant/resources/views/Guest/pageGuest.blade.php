<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @vite([ 'resources/css/app.css', 'resources/scss/Guest/guest.scss',
                'resources/js/app.js',
            ])])

</head>
<body dir="rtl">
@php
    $query = $query ?? '';
@endphp
<div class="container">
    <header style="width: 100%">
        <nav class=" navbar navbar-expand-lg" >
            <ul class="nav">
                <li class="nav-item">
                    <a href="#card-product" class="nav-link">لیست محصولات</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a href="#follow" class="nav-link">راه های ارتباط با ما</a>
                </li>

                <li class="nav-item">
                    @auth
                        <a href="{{route('products')}}" class="nav-link">سفارش</a>
                    @else
                        <a href="#" class="nav-link" onclick="showAlert()">سفارش</a>
                    @endauth
                </li>
                <li class="nav-item">
                    @auth
                        <a href="{{route('home')}}" class="nav-link">ورود به سایت</a>
                    @else
                        <a href="#" class="nav-link" onclick="showSite()">ورود به سایت</a>
                    @endauth
                </li>

                <script>
                    function showAlert() {
                        alert("برای ثبت سفارش ابتدا باید ثبت ‌نام کنید و وارد شوید.");
                    }
                </script>
                <script>
                    function showSite()
                    {
                        alert("دوست عزیز برای ورود به بخش های مختلف سایت نیازمند ثبت نام است")
                    }
                </script>

            </ul>
            <form action="{{route('guest.search')}}" method="GET" class="d-flex">
                <input
                    type="text"
                    name="query"
                    class="form-control me-2"
                    placeholder="جستجوی محصول"
                    value="{{ request('query') }}"
                    required>
                <button type="submit" class="btn btn-primary">جستجو</button>
                @if(request()->has('query'))
                    <a href="{{ route('guest.index') }}" class="btn btn-secondary ms-2 text-white">نمایش تمام محصولات</a>
                @endif
            </form>
            @if (Route::has('login'))
                <div class=" auth">
                    @auth
                        <h3 class="text-white ml-8">{{\Illuminate\Support\Facades\Auth::user()->name}}</h3>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button class="btn btn-primary">خروج</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                           class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 login">
                            ورود
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="ml-4 font-semibold text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 register">
                                ثبت نام
                            </a>
                        @endif
                    @endauth
                </div>
            @endif


        </nav>
        <div class="carousel1 ">

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">


                    <div class="d-flex align-items-center justify-content-between cart ">
                        <div class="w-50 image">
                            <img src="../../images/kesh.png" class="d-block w-100" alt="..." style="height: 500px">
                        </div>

                        <div class="w-50 px-4 description">
                            <h5 >فست فود کش لقمه</h5>
                            <hr>
                            <p>
                                فست فود کش لقمه با بیش  از یک دهه سابقه درخشان در صنعت فست فود همراه با کادری مجرب در خدمت شما میباشد       </p>
                            <a href="{{route('Morsel')}}" class="btn btn-primary">اطلاعات بیشتر</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="d-flex align-items-center justify-content-between cart">
                        <div class="w-50 image">
                            <img src="../../images/fast-foodHiva.png" class="d-block w-100" alt="..." style="height: 500px">
                        </div>

                        <div class="w-50 px-4 description">
                            <h5 >   فست فود هیوا</h5>
                            <hr>
                            <p>فست فود هیوا با بیش در چند سال سابقه درخشان با بهترین کیفیت در خدمت هم استانی های عزیز </p>
                            <a href="{{route('hiva')}}" class="btn btn-primary">اطلاعات بیشتر</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-between cart">
                        <div class="w-50 image">
                            <img src="../../images/dor.jpg" class="d-block w-100" alt="..." style="height: 500px">
                        </div>

                        <div class="w-50 px-4 description">
                            <h5 >  فست فود عطاویچ</h5>
                            <hr>
                            <p>
                                این یک متن نمونه برای توضیح تصویر اول است که به صورت کنار تصویر قرار گرفته است.
                            </p>
                            <a href="{{route('Atavitch')}}" class="btn btn-primary">اطلاعات بیشتر</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">قبل</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">بعد</span>
            </button>
        </div>
        </div>
    </header>
    <section id="card-product">

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    @if(isset($products) && $products->isNotEmpty())
                        <div class="row" >
                            @foreach($products as $product)
                                <div class="col-md-4 col-lg-4">
                                    <div class="card mb-3 shadow ">
                                       <div class="image">
                                           <img src="{{asset('storage/'.$product->image)}}" alt="" >
                                       </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product->name }}</h5>
                                            <p class="card-text">{{ $product->description }}</p>
                                            @if(isset($product->discount)&& $product->discount->percentage>0)
                                                <button class="btn btn-danger">{{$product->discount->percentage}}%</button>

                                                <h5 class="mt-3 ">قیمت با احتساب تخفیف
                                                    <hr>
                                                <span class="bg-amber-500">{{($product->price) - ($product->price*($product->discount->percentage/100))}}ریال</span>
                                                </h5>
                                            @else
                                                <h5 class="mt-3">قیمت
                                                    <hr>
                                                    <span class="bg-amber-500">{{$product->price}}</span>
                                                </h5>

                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @elseif(isset($query))
                        <p class="text-center text-white">هیچ محصولی برای "{{ $query }}" یافت نشد.</p>
                    @else
                        <h4>تمام محصولات</h4>

                    @endif
    </section>
    <section class="footer  ">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 mt-3" id="follow">
                    <img src="../../Icon/iconfastfood2.png" alt="" >
                    <h2 class="header">دنبال کردن</h2>
                    <div class="icon-social">
                        <img src="../../Icon/instagram2.png" alt="" >
                        <img src="../../Icon/telegram.png" alt="" >
                        <img src="../../Icon/twitter.png" alt="" >
                    </div>
                    <h2 class="header">آدرس</h2>
                    <p class="address">مشهد بلوار معلم بین معلم2و4</p>
                </div>
                <div class="col-sm-4 mt-5">
                    <div class="hours">
                        <h2 class="opening">ساعات کاری</h2>
                        <hr>
                      <div class="time">
                          <h3 class="day ">شنبه تا پنجشنبه</h3>
                          <h4>9-21</h4>

                          <h3 class="day "> جمعه</h3>
                          <h4>10-15</h4>


                      </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h2 class="contact">ارتباط با ما</h2>
                    <form action="{{route('guest.store')}}" method="post">
                        @csrf
                        <input type="text" class="name" name="name" placeholder="نام را وارد نمایید">
                        <input type="tel" class="phone" name="phone" placeholder="شماره تماس">
                        <textarea name="massages" class="description" placeholder="پیغام را وارد نمایید"></textarea>
                        <button class="btn btn-success">ارسال</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
