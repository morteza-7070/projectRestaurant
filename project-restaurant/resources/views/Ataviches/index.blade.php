<head>

    <link rel="stylesheet" href="../../css/PizzaHiva/style.css">
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
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVww7kKPSnSy-t23cUs6niBoCGednpuo4GVQ&s" alt="">
            </div>
            <ul class="nav">
                <img src="../../images/iconFastFood.png" alt="">
                <li class="nav-item"><a href="" class="nav-link">صفحه اصلی</a></li>
                <li class="nav-item"><a href="#list" class="nav-link">لیست محصولات</a></li>
                <li class="nav-item"><a href="" class="nav-link">ایجاد</a></li>
            </ul>
            <div class="title">
                <h1 class="title-header">فست فود عطاویچ</h1>
                <p class="title-body"><span>فست فود عطاویچ همراه با کادری مجرب همراه با بهترین مواد اولیه در محیطی امن و ایمن در خدمت خانواده های و همشهریان عزیز </span></p>
            </div>
        </div>
    </div>
    <div id="list">
        <h2>لیست محصولات</h2>
        @foreach($Ataviches as $Atavich)
            <div class="card">
                <div class="card-title"></div>
            </div>
        @endforeach
    </div>

</div>
<main>
    <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
        @foreach($Ataviches as $Atavich)
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
            <div class="col"> <div class="card h-100 shadow-sm">
                    <img src="{{ asset('storage/' . $Atavich->image) }}" alt="fastfoodAtavich" style="width: 100%">                    <div class="card-body">
                        <div class="clearfix mb-3">
                            <span class="float-start badge rounded-pill bg-primary">{{$Atavich->name}}</span>
                            <span class="float-end price-hp">{{$Atavich->price}}ریال</span> </div>
                        <h5 class="card-title">{{$Atavich->description}}</h5>
                        <div class="text-center my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div> </div> </div> </div>

                                </i></span> <span class="float-end"><i class="fas fa-plus"></i></span>
        </div> </div>
    @endforeach
</main>
