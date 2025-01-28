<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @vite([ 'resources/css/app.css', 'resources/scss/Guest/guest.scss',
                'resources/js/app.js',
            ])])

</head>
<body dir="rtl">
<div class="container">
    <header>
        <nav class=" navbar navbar-expand-lg">
            <ul class="nav">
                <li class="nav-item">
                    <a href="#card-product" class="nav-link">لیست محصولات</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">راه های ارتباط با ما</a>
                </li>
            </ul>
            <form action="" method="GET" class="d-flex">
                <input
                    type="text"
                    name="query"
                    class="form-control me-2"
                    placeholder="جستجوی محصول."
                    value="{{ request('query') }}"
                    required>
                <button type="submit" class="btn btn-primary">جستجو</button>
            </form>
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
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>
    </header>
    <section id="card-product">
        <div class="row">

            @foreach($products as $product)
                <div class="col-sm-6 col-lg-4">
                    <div class="card">
                        <div class="image">
                            <img src="{{asset('storage/'.$product->image)}}" alt="" >
                        </div>
                        <div class="card-body">
                            <h2>{{$product->name}}</h2>
                            <hr>
                            <p class="description">{{$product->description}}</p>
                            @if($product->discount && $product->discount->percentage>0)
                                <button class="btn btn-danger">{{$product->discount->percentage}}%تخفیف</button>
                                <h3 class="price-off">{{($product->price) - ($product->price * ($product->discount->percentage / 100))}}:قیمت با تخفیف</h3>
                            @else
                                <h3 class="price">{{$product->price}}:قیمت</h3>

                            @endif
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </section>
    <section class="footer mt-5">
        <div class="container"></div>
    </section>
</div>
</body>
