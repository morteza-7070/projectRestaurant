

<head>

    <link rel="stylesheet" href="../../css/Cririeshing/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite([
                 'resources/css/app.css', 'resources/scss/List/style.scss',
                 'resources/js/app.js',
             ])

</head>
<div class="container">
    <h1>morteza</h1>
{{--   <div class="row">--}}
{{--       <div class="col-sm-3">--}}
{{--           @foreach( $pastaItems as $Atavich)--}}
{{--               <div class="card">--}}
{{--                   <div class="card-image"> <img src="{{ asset('storage/' .  $Atavich->image) }}" alt="PizzaHiva" style="width: 100%"></div>--}}
{{--                   <div class="card-title">{{$Atavich->name}}</div>--}}
{{--                   <div class="card-body">--}}
{{--                       <p>{{$Atavich->description}}</p>--}}
{{--                       <div class="button">{{$Atavich->price}}</div>--}}
{{--                   </div>--}}
{{--               </div>--}}
{{--           @endforeach--}}
{{--       </div>--}}
{{--       <div class="col-sm-3">--}}
{{--           @foreach($fastHiva as $Hiva)--}}
{{--               <div class="card">--}}
{{--                   <div class="card-image"> <img src="{{ asset('storage/' .  $Hiva->image) }}" alt="PizzaHiva" style="width: 100%"></div>--}}
{{--                   <div class="card-title">{{$Hiva->name}}</div>--}}
{{--                   <div class="card-body">--}}
{{--                       <p>{{$Hiva->description}}</p>--}}
{{--                       <div class="button">{{$Hiva->price}}</div>--}}
{{--                   </div>--}}
{{--               </div>--}}
{{--           @endforeach--}}
{{--       </div>--}}
{{--   </div>--}}
</div>
