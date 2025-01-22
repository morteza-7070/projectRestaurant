<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">

    <title> فست فود لقمه کش </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/cssDiscount/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../css/style.css">
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>
<h1 class="title">صفحه تخفیفات</h1>



    <button class="button-78" role="button"><a href="{{route('discount.create')}}">ایجاد تخفیفات</a></button>


    <div class="row">
        <!-- HTML !-->
        @foreach($discount as $dis)
        <div class="card col-sm-4">
            <div class="img"><img src="{{ asset('storage/' . $dis->image) }}" alt="discount Image"  class="image"></div>
            <div class="card-body">
                <h5 class="card-title">{{$dis->name}}</h5>

               <div class="percentage">
                   <button class="button-73" role="button">{{$dis->percentage}}%</button>
               </div>
                <div class="start-date">
                    <h3><span>:تاریخ شروع تخفیف</span><br>{{$dis->startShamsi}}</h3>
                    <h3><span>:تاریخ پایان تخفیف</span><br>{{$dis->endShamsi}}</h3>
                </div>
                <br>

                       <form action="{{route('discount.edit',$dis->id)}}" method="get">
                           @csrf

                           <button class="button-50" role="button">ویرایش</button>

                       </form>
                <form action="{{route('discount.destroy',$dis->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button class="button-49 mt-3" role="button">خذف</button>
                </form>








            </div>


        </div>
        @endforeach
    </div>


