

<head>

    {{--    <link rel="stylesheet" href="../../css/PizzaHiva/style.css">--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite([
                 'resources/css/app.css', 'resources/scss/cretieshing/style.scss',
                 'resources/js/app.js',
             ])

</head>
<div class="container-1">

    <form action="{{route('Boof.store')}}" method="post" enctype="multipart/form-data" id="formCreate">
        @csrf

        <div class="form-create">
            <h2>ایجاد فرم</h2>

            <div id="name">
                <input type="text" class="name" placeholder="نام را وارد نمایید" name="name"><br>
                @if($errors->first('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                @endif
            </div>
            <div id="price">
                <input type="text" class="price" placeholder="قیمت مورد نظر را وارد نمایید" name="price"><br>
                @if($errors->first('price'))
                    <span class="text-danger">{{$errors->first('price')}}</span>
                @endif
            </div>
            <div id="image">
                <input type="file" class="image" placeholder="عکس مورد نظر را وارد نمایید" name="image"><br>
                @if($errors->first('image'))
                    <span class="text-danger">{{$errors->first('image')}}</span>
                @endif
            </div>
            <div id="description">
                <input type="text" class="description" placeholder="توضیحات را وارد نمایید" name="description"><br>
                @if($errors->first('description'))
                    <span class="text-danger">{{$errors->first('description')}}</span>
                @endif
            </div>
            <select id="discount_id" name ="discount_id">
                <option  name='discount_id' value=""   selected>بدون تخفیف</option>


                @foreach($discounts as $discount)
                    <option name="discount_id" value="{{ $discount->id }}" {{old('discount_id') ==$discount->id ?'selected': ""}} >{{$discount->percentage}}</option>
                    <br>
                    @if($errors->first('discount_id'))
                        <span class="text-danger">{{$errors->first('discount_id')}}</span>
                    @endif
                @endforeach
            </select><br>
            <button type="submit" class="btn btn-info">ذخیره</button>
        </div>

    </form>
</div>
