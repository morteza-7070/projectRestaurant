<head>

    <link rel="stylesheet" href="../../css/Cririeshing/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite([
                 'resources/css/app.css', 'resources/scss/cart/showCart.scss',
                 'resources/js/app.js',
             ])

</head>`


    <div class="container">
        <h2>سبد خرید</h2>
        @if($cart->products)
            <table class="table">
                <thead>
                <tr>
                    <th>محصول</th>
                    <th>عکس</th>
                    <th>تعداد</th>
                    <th>قیمت</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cart->products as $item)
                    <tr>
                        <td class="name"><p>{{ $item['product']->name }}</p></td>
                        <td class="image"><img src="{{asset('storage/'.$item['product']->image)}}" alt=""></td>
                        <td class="count"><p class="count-body">{{ $item['count'] }}</p></td>
                        <td class="price"><p>{{ $item['price'] }}</p></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <p class="total-price">جمع کل: {{ $cart->price }}تومان</p>
        @else
            <p>سبد خرید شما خالی است.</p>
        @endif
    </div>



