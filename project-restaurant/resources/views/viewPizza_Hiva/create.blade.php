<head>

    <link rel="stylesheet" href="../../css/PizzaHiva/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite([
                 'resources/css/app.css', 'resources/scss/Hiva/style.scss',
                 'resources/js/app.js',
             ])

</head>
    <div class="form">
        <form action="{{route('restaurant.store')}}" method="post" id="Form" enctype="multipart/form-data" >
            @csrf
            <div id="name">
                <input type="text" class="name" name="name" placeholder="Enter Your Name" value="{{old('name')}}">
                @if($errors->first('name'))
                    <span class="text-white">{{$errors->first('name')}}</span>
                @endif
            </div>
            <div id="image">
                <input class="image" type="file" value="{{old('image')}}" name="image">
                @if($errors->first('image'))
                    <span class="text-white">{{$errors->first('image')}}</span>
                @endif
            </div>
            <div id="description">
                <input type="text" class="description" placeholder="Enter Description" name="description" value="{{old('description')}}">
                @if($errors->first('description'))
                    <span class="text-white">{{$errors->first('description')}}</span>
                @endif
            </div>
            <div id="price">
                <input type="text" class="price" name="price" placeholder="Enter Price Food" value="{{old('price')}}">
                @if($errors->first('price'))
                    <span class="text-white">{{$errors->first('price')}}</span>
                @endif
            </div>
            <select id="discount" name="discount_id">
                @foreach($discounts as $discount)
                    <option name="discount_id" class="discount" value="{{ $discount->id }}" {{old('discount_id') ==$discount->id ?'selected': ""}} >{{ $discount->percentage }} </option>
                    @if($errors->first('discount_id'))
                        <span class="text-white">{{$errors->first('discount_id')}}</span>
                    @endif

                @endforeach
            </select><br>
            <button type="submit" class="btn btn-success">ارسال</button>
        </form>
    </div>


