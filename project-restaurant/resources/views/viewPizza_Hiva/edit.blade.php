
<head>


    <link rel="stylesheet" href="../../css/PizzaHiva/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite([
                 'resources/css/app.css', 'resources/scss/Hiva/style.scss',
                 'resources/js/app.js',
             ])

</head>
<div class="container-fluid">
    <form action="{{route('restaurant.update',$buyers->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h2 class="title-form">ویرایش فرم</h2>

        <div id="image">
            <img class="image-foods" src="{{ asset('storage/' . $buyers->image) }}" alt="PizzaHiva" style="width: 100%" >
            <input type="file" class="EditImage" name="image"><br>
           @if($errors->first('image'))
               <span class="text-white">{{$errors->first('image')}}</span>
           @endif

        </div>
        <div id="name">نام:
            <input type="text" class="name" name="name" value="{{$buyers->name}}"><br>
            @if($errors->first('name'))
                <span class="text-white">{{$errors->first('name')}}</span>
            @endif
        </div>
        <div id="description">توضیحات:
            <input type="text" class="description" value="{{$buyers->description}}" name="description"><br>
            @if($errors->first('description'))
                <span class="text-white">{{$errors->first('description')}}</span>
            @endif
        </div>
        <div id="price">قیمت:
            <input type="text" class="price" value="{{$buyers->price}}" name="price"><br>
            @if($errors->first('price'))
                <span class="text-white">{{$errors->first('price')}}</span>
            @endif
        </div>
        <div id="button">
            <button class="btn btn-info" type="submit">ارسال تغییرات</button>
        </div>

    </form>
</div>
