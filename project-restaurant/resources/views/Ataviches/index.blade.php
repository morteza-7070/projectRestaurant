<head>

    <link rel="stylesheet" href="../../css/Atavich/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite([
                 'resources/css/app.css', 'resources/scss/Atavich/style.scss',
                 'resources/js/app.js',
             ])

</head>
<div class="container">
    <div class="header">
        <div class="navbar-nav">
            <div class="img">
                <img src="https://cdn.pixabay.com/photo/2023/07/08/17/43/food-8114884_640.jpg" alt="">
            </div>
            <ul class="nav">
                <img src="../../images/iconFastFood.png" alt="">
                <li class="nav-item"><a href="" class="nav-link">صفحه اصلی</a></li>
                <li class="nav-item"><a href="#productList" class="nav-link">لیست محصولات</a></li>
                <li class="nav-item"><a href="{{route('fastfood.create')}}" class="nav-link">ایجاد</a></li>
            </ul>
            <div class="title">
                <h1 class="title-header">فست فود  عطاویچ</h1>
                <p class="title-body"><span>فست فود عطاویچ  همراه با کادری مجرب همراه با بهترین مواد اولیه در محیطی امن و ایمن در خدمت خانواده های و همشهریان عزیز </span></p>
            </div>
        </div>
    </div>

    <div id="productList">
        <h1>لیست محصولات</h1>
        <div class="row w-100">
            @foreach($Ataviches as $Atavich)
                <div class="col-sm-3">
                    <div class="card">
                        <img src="{{ asset('storage/' .  $Atavich->image) }}" alt="PizzaHiva" style="width: 100%">
{{--                        <button class="button-1" role="button">{{ $Atavich->discount->percentage}}%</button>--}}
                        @if(isset($Atavich->discount->percentage))
                            <button class="button-1" role="button">{{ $Atavich->discount->percentage}}%</button>
                        @else
                        @endif

                        <div class="card-info">
                            <p class="text-title">{{ $Atavich->name}} </p>
                            <p class="text-name-restaurant">{{$Atavich->name_restaurant}} <span>:نام رستوران</span> </p>
                            <p class="text-type">{{$Atavich->type}} <span>:دسته بندی</span> </p>
                            <p class="text-body">{{ $Atavich->description}}</p>

                        </div>

                        <div class="card-footer">
                           <div class="text-title">
                               @if(isset($Atavich->discount) && $Atavich->discount->percentage > 0)
                                  <h5>قیمت:<span class="text-title price-original">{{ $Atavich->price }} ریال</span></h5>
                                   <hr>
                                  قیمت با احتساب تخفیف: <span class="price-off">{{ ($Atavich->price) - ($Atavich->price * ($Atavich->discount->percentage / 100)) }} ریال</span>

                               @else
                                  <h5>قیمت:<span class="text-title">{{ $Atavich->price }} ریال</span></h5>
                               @endif
                           </div>
                        </div>


                        {{--                 <button class="button-1" role="button">{{$buyer->discount->percentage}}<span class="off">%</span> </button>--}}
{{--                        <span class="price off">{{( $Atavich->price)-( $Atavich->price*( $Atavich->discount->percentage/100))}} ریال</span>--}}
                        <div class="row">
                            <div class="col-sm-5">
                                <form action="{{route("fastfood.destroy", $Atavich->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    {{ $Atavich->text}}
                                    <button type="submit"  class="btn btn-danger">Delete</button>

                                </form>
                                <form action="{{route('fastfood.edit', $Atavich->id)}}" method="get">
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

