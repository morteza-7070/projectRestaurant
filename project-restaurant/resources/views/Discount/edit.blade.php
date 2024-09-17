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

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />

    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <link href="css/cssDiscount/edit/edit.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../css/cssDiscount/edit/edit.css">
    <link href="css/responsive.css" rel="stylesheet" />
</head>
<div class="container mt-3">
   <div class="card mt-4">
       <form action="{{route('discount.update',$edit->id)}}" method="post" enctype="multipart/form-data">
           @csrf
           @method('PUT')
           <div class="name">
               <input type="text" name="name" value="{{$edit->name}}"><br>
               @if($errors->first('name'))
                   <span class="text-light">{{$errors->first('name')}}</span>
               @endif
           </div>
           <div class="percentage">
               <input type="text" name="percentage" value="{{$edit->percentage}}"><br>
               @if($errors->first('percentage'))
                   <span class="text-light">{{$errors->first('percentage')}}</span>
               @endif
           </div>
           <div class="img">
               <img src="{{asset('storage/' . $edit->image)}}" alt="">
           </div>
           <div class="image">
               <input type="file" name="image"><br>
               @if($errors->first('image'))
                   <span class="text-light">{{$errors->first('image')}}</span>
               @endif
           </div>
           <div class="start">
               <h4><span>شروع تخفیفات:</span> {{$edit->startShamsi}}</h4>
               <input type="date" name="start_date" placeholder="ویرایش تاریخ شروع تخفیفات"><br>
               @if($errors->first('start_date'))
                   <span class="text-light">{{$errors->first('start_date')}}</span>
               @endif
           </div>
           <div class="end">
               <h4><span>اتمام تخفیفات:</span> {{$edit->endShamsi}}</h4>
               <input type="date" name="end_date" placeholder="ویرایش تاریخ پایان تخفیفات"><br>
               @if($errors->first('end_date'))
                   <span class="text-light">{{$errors->first('end_date')}}</span>
               @endif
           </div>
           <!-- HTML !-->
           <button class="button-64" role="button"><span class="text">ویرایش</span></button>



    </form>
</div>

