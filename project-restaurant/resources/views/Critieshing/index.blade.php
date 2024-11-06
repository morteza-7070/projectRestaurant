<head>

    <link rel="stylesheet" href="../../css/Cririeshing/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite([
                 'resources/css/app.css', 'resources/scss/cretieshing/style.scss',
                 'resources/js/app.js',
             ])

</head>
<div class="container">
    <div class="header">
        <div class="navbar-nav">
            <div class="img">
                <img src="https://cdn.pixabay.com/photo/2019/05/24/11/18/burger-4226039_640.jpg" alt="">            </div>
            <ul class="nav">
                <img src="../../images/iconheader3.png" alt="">
                <li class="nav-item"><a href="{{route('index')}}" class="nav-link">صفحه اصلی</a></li>
                <li class="nav-item"><a href="#productList" class="nav-link">لیست محصولات</a></li>
                <li class="nav-item"><a href="{{route('Boof.create')}}" class="nav-link">ایجاد</a></li>
            </ul>
            <div class="title">
                <h1 class="title-header">فست فود لقمه کش</h1>
                <p class="title-body"><span>فست فود لقمه کش همراه با کادری مجرب همراه با بهترین مواد اولیه در محیطی امن و ایمن در خدمت خانواده های و همشهریان عزیز </span></p>
            </div>
        </div>
    </div>

    <div id="productList">
        <h1>لیست محصولات</h1>
        <div class="row w-100">
            @foreach($fastfoodCretishes as $fast)
                <div class="col-sm-3">
                    <div class="card">
                        <img src="{{ asset('storage/' .  $fast->image) }}" alt="PizzaHiva" style="width: 100%">
                        {{--                        <button class="button-1" role="button">{{ $Atavich->discount->percentage}}%</button>--}}
                        @if(isset($fast->discount->percentage))
                            <button class="button-1" role="button">{{ $fast->discount->percentage}}%</button>
                        @else
                        @endif

                        <div class="card-info">
                            <p class="text-title">{{ $fast->name}} </p>
                            <p class="text-name-restaurant">{{$fast->name_restaurant}} <span>:نام رستوران</span> </p>

                            <p class="text-body">{{ $fast->description}}</p>

                        </div>

                        <div class="card-footer">
                            <div class="text-title">
                                @if(isset($fast->discount) && $fast->discount->percentage > 0)
                                    <h5>قیمت:<span class="text-title price-original">{{ $fast->price }} ریال</span></h5>
                                    <hr>
                                    قیمت با احتساب تخفیف: <span class="price-off">{{ ($fast->price) - ($fast->price * ($fast->discount->percentage / 100)) }} ریال</span>

                                @else
                                    <h5>قیمت:<span class="text-title">{{ $fast->price }} ریال</span></h5>
                                @endif
                            </div>
                        </div>


                        {{--                 <button class="button-1" role="button">{{$buyer->discount->percentage}}<span class="off">%</span> </button>--}}
                        {{--                        <span class="price off">{{( $Atavich->price)-( $Atavich->price*( $Atavich->discount->percentage/100))}} ریال</span>--}}
                        <div class="row">
                            <div class="col-sm-5">
                                <form action="{{route("Boof.destroy", $fast->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    {{ $fast->text}}
                                    <button type="submit"  class="btn btn-danger">Delete</button>

                                </form>
                                <form action="{{route('Boof.edit', $fast->id)}}" method="get">
                                    @csrf
                                    <button type="submit" class="btn btn-info">Edit</button>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>

            @endforeach
        </div>
    </div>


</div>

