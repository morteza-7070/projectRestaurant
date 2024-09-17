
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
    <link href="css/cssDiscount/create/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../css/cssDiscount/create/style.css">
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>
<div class="container">
      <div class="text">
         فرم ایجاد تخفیفات
      </div>
      <form action="{{route('discount.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
{{--          {{$discount->text}}--}}
         <div class="form-row">
            <div class="input-data">
               <input type="text" required name="name" placeholder="Enter NameFood"><br>
                @if($errors->first('name'))
                    <span class="text-light">{{$errors->first('name')}}</span>
                @endif

            </div>
            <div class="input-data">
               <input type="file"  name="image" placeholder="Enter FileImage"><br>
                @if($errors->first('image'))
                    <span class="text-light">{{$errors->first('image')}}</span>
                @endif

            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="text" required  name="percentage" placeholder="EnterPercentage"><br>
                @if($errors->first('percentage'))
                    <span class="text-light">{{$errors->first('percentage')}}</span>
                @endif

            </div>
             <br>
            <div class="input-data">شروع تخفیفات از:
                <input type="date" name="start_date" placeholder="EnterStartDateDiscount"><br>
                @if($errors->first('start_date'))
                    <span class="text-light">{{$errors->first('start_date')}}</span>
                @endif

            </div>
             <br>
             <div class="input-data">اتمام تخفیفات:
                 <input type="date" name="end_date" placeholder="EnterEndDateDiscount"><br>
                 @if($errors->first('end_date'))
                     <span class="text-light">{{$errors->first('end_date')}}</span>
                 @endif

             </div>
             <br>
             <!-- HTML !-->
             <button class="button-85" role="button">ارسال تخفیفات</button>



         </div>


      </form>
      </div>
