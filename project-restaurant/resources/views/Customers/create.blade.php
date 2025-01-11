<header>
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
        <link href="css/customers/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="../../css/customers/style.css">
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />
    </head>
</header>

<div class="container">
    <h1 id="title">فرم ثبت نام مشتری</h1>
    <form action="{{route('restaurants.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div id="name">
            <input type="text" name="name" placeholder="نام را وارد نمایید" class="name" value="{{ old('name') }}"><br>
{{--            @if ($errors->has('name'))--}}
{{--                <span class="text-light">{{ $errors->first('name') }}</span>--}}
{{--            @endif--}}
        </div>
        <div id="phone">
            <input type="text" name="phone" placeholder="تلفن را وارد نمایید" class="phone" value="{{old("phone")}}"><br>
{{--            @if($errors->first('phone'))--}}
{{--                <span class="text-light">{{$errors->first('phone')}}</span>--}}
{{--            @endif--}}
        </div>
        <div id="address">
            <input type="text" name="address" placeholder="آدرس را وارد نمایید" class="address" value="{{old('password')}}"><br>
{{--            @if($errors->first('address'))--}}
{{--                <span class="text-light">{{$errors->first('address')}}</span>--}}
{{--            @endif--}}
        </div>
        <div id="email">
            <input type="text" name="email" placeholder="ایمکیل را وارد نمایید" class="email" value="{{old('email')}}"><br>
{{--            @if($errors->first('email'))--}}
{{--                <span class="text-light">{{$errors->first('email')}}</span>--}}
{{--            @endif--}}
        </div>
        <div id="birthday">
            <input type="date" name="birthday" placeholder="تاریخ تولد" class="birthday" value="{{old('birthday')}}"><br>
{{--            @if($errors->first('birthday'))--}}
{{--                <span class="text-light">{{$errors->first('birthday')}}</span>--}}
{{--            @endif--}}
        </div>
        <div id="password">
            <input type="password" name="password" placeholder="پسورد را انتخاب کنید" class="password" value="{{old('password')}}"><br>
{{--            @if($errors->first('password'))--}}
{{--                <span class="text-light">{{$errors->first('password')}}</span>--}}
{{--            @endif--}}
        </div>
{{--        <div id="confirm-password">--}}
{{--            <input type="text" name="password" placeholder="پسورد را انتخاب کنید" class="password"><br>--}}
{{--            @if($errors->first('password'))--}}
{{--                <span class="text-light">{{$errors->first('password')}}</span>--}}
{{--            @endif--}}
{{--        </div>--}}

       <div id="button">
           <button class="button-72" role="button">ثبت نام</button>
       </div>


    </form>



  </div>
