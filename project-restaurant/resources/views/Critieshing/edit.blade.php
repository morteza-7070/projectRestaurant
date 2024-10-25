
<head>

    <link rel="stylesheet" href="../../css/PizzaHiva/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite([
                 'resources/css/app.css', 'resources/scss/cretieshing/style.scss',
                 'resources/js/app.js',
             ])

</head>

<form action="{{route('fastfood.update',$fasts->id)}}" method="post" enctype="multipart/form-data" id="Edit">
    <a href="{{route('FastFoodBoof') }}"><h3>برگشت به صفحه اصلی</h3></a>

    @csrf
    @method("PUT")

    <div class="form-Edit">
        <div id="image">
            <img src="{{asset('storage/'.$fasts->image)}}" alt="imageFastFoodAtaviches" class="imageFast"><br>
            <input type="file" class="image" name="image">
            <span class="title-image">:عکس</span>
            <br>
            @if($errors->first('image'))
                <span class="text-dark">{{$errors->first('image')}}</span>
            @endif
        </div>
        <div id="name"><input type="text" class="name" name="name" value="{{$fasts->name}}"><span class="title-name">:نام</span>
            <br>@if($errors->first('name'))
                <span class="text-dark">{{$errors->first('name')}}</span>
            @endif</div>
        <div id="price"><input type="text" name="price" class="price" value="{{$fasts->price}}"><span class="title-price">:قیمت</span>
            <br>@if($errors->first('price'))
                <span class="text-dark">{{$errors->first('price')}}</span>
            @endif</div>
        <div id="description"><input type="text" name="description" value="{{$fasts->description}}" class="description"> <span class="title-description">:توضیحات</span>
            <br>@if($errors->first('description'))
                <span class="text-dark">{{$errors->first('description')}}</span>
            @endif</div>


        <div id="button"><button type="submit" class="btn btn-success">ارسال ویرایش</button></div>

    </div>
</form>
