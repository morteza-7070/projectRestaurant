
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
        <div id="name"><input type="text" class="name" name="name" value="{{$buyers->name}}"></div>

    </form>
</div>
