<head>

    <link rel="stylesheet" href="../../css/PizzaHiva/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite([
                 'resources/css/app.css', 'resources/scss/Hiva/style.scss',
                 'resources/js/app.js',
             ])

</head>

<div class="container">
    <header>

        <div class="overlay"></div>

        <img src="https://img.freepik.com/free-photo/view-3d-burger-meal-with-french-fries_23-2150914759.jpg" alt="">

        <div class="container h-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                <a class="navbar-brand" href="#"><img class="iconTitle" src="../../Icon/title01.svg" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('restaurant.create')}}">ایجاد غذا <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#productList">لیست محصولات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('index')}}">صفحه اصلی</a>
                        </li>

                    </ul>
                </div>
            </nav>
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3">پیتزا هیوا</h1>
                    <p class="lead mb-0">پیتزا هیوا با بیش از 30 سال سابقه درخشان</p>
                </div>
            </div>
        </div>
    </header>





      <div id="productList">
          <div class="row w-100">
              @foreach($buyers as $buyer)
                  <div class="col-sm-3">
                      <div class="card">
                          <img src="{{ asset('storage/' . $buyer->image) }}" alt="PizzaHiva" style="width: 100%">
                          @if(isset($buyer->discount->percentage))
                              <button class="button-1" role="button">{{ $buyer->discount->percentage}}%</button>
                          @else
                          @endif

                          <div class="card-info">
                              <p class="text-title">{{$buyer->name}} </p>
                              <p class="text-type">{{$buyer->type}} <span>:دسته بندی</span> </p>
                              <p class="text-body">{{$buyer->description}}</p>
                          </div>
                          <div class="card-footer">
                              @if(isset($buyer->discount) && $buyer->discount->percentage > 0)
                                  <h5>قیمت:<span class="text-title price-original">{{ $buyer->price }} ریال</span></h5>
                                  <br>
                                  <hr>
                                  قیمت با احتساب تخفیف: <span class="price-off">{{ ($buyer->price) - ($buyer->price * ($buyer->discount->percentage / 100)) }} ریال</span>
                                  <br>

                              @else
                                  <h5>قیمت:<span class="text-title1">{{ $buyer->price }} ریال</span></h5><br>
                              @endif


                          </div>
                         <div class="row">
                             <div class="col-sm-5">
                                 <form action="{{route("restaurant.destroy",$buyer->id)}}" method="post">
                                     @csrf
                                     @method('DELETE')
                                     {{$buyer->text}}
                                     <button type="submit"  class="btn btn-danger">Delete</button>

                                 </form>
                                 <form action="{{route('restaurant.edit',$buyer->id)}}" method="post">
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

