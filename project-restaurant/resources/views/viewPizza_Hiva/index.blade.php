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

        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
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
                            <a class="nav-link" href="#">درباره ما <span class="sr-only"></span></a>
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
       @foreach($buyers as $buyer)
           <div class="card">
               <div class="card-img"><img src=" {{asset('storage/' ,$buyer->image )}}" alt="PizzaHiva"></div>
               <div class="card-info">
                   <p class="text-title">{{$buyer->name}} </p>
                   <p class="text-body">{{$buyer->description}}</p>
               </div>
               <div class="card-footer">
                   <span class="text-title">{{$buyer->price}}ریال</span>

               </div></div>
       @endforeach

   </div>
</div>
