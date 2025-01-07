<head>

    <link rel="stylesheet" href="../../css/Cririeshing/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite([
                 'resources/css/app.css', 'resources/scss/cart/showCart.scss',
                 'resources/js/app.js',
             ])

</head>`


    <div class="container">
        <form action="{{route('cart.clear')}}" method="POST">@csrf<button class="btn " type="submit">پاک کردن کل سبد خرید</button></form>
        <a href="{{route('products')}}" class="order-product">برگشت به صفحه محصولات</a>

        <h2>سبد خرید</h2>
        @if($cart->products)
            <table class="table">
                <thead>
                <tr>
{{--                    <th>محصول</th>--}}
                    <th>عکس</th>
                    <th>تعداد</th>
                    <th>قیمت</th>
                    <th>حذف</th>
                    <th> ویرایش</th>
                    <th>نام</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cart->products as $item)
                    <tr>
{{--                        <td  class='name'  ><p name="name">{{ $item['product']->name }} </p></td>--}}
                        <td class="image" name="image"><img src="{{asset('storage/'.$item['product']->image)}}" alt=""></td>
                        <td class="count" ><p class="count-body" name="count">{{ $item['count'] }}</p></td>
                        <td class="price" ><p name="price">{{ $item['price'] }}</p></td>
                        <td class="icon-delete">
                            <form action="{{ route('cart.remove', $item['product']->id) }}" method="POST" id="Delete">
                                @csrf
                                <button class="btn " type="submit">
                                    <img src="../../Icon/delete3.png" alt="" class="icon">
                                </button>
                            </form>
                        </td>
                        <td class="Edit">
                            <form action="{{route('cart.update',$item['product']->id)}}" method="post" id="edit">
                                @csrf
                                <input type="number" name="count" value="{{ $item['count'] }}" class="form-Edit" min="1" required>
                                <button class="btn btn-success" type="submit">
                                    ویرایش تعداد
                                </button>
                            </form>
                        </td>
                        <td class="data">


                                <form action="{{ route('cart.store') }}" method="post" id="sendDatabase">
                                    @csrf
                                   <div>
                                       <input type="text" name="name" class="order" placeholder="Order Name" required value="{{$item['product']->name}}" readonly>

                                   </div>
                                </form>



                        </td>


                    </tr>
                    <hr>
                @endforeach
                </tbody>
            </table>
            <p class="totalCount">تعداد کل محصولات: {{ $totalCount }}</p>
            <p class="total-price">جمع کل: {{ $cart->price }}تومان</p>
            <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data" id="sendOrders">
                @csrf
                <input type="hidden" name="name" class="order" placeholder="Order Name" required value="{{$item['product']->name}}" readonly >

                <button type="submit" class="btn btn-success"> ارسال سفارش</button>
            </form>
        @else
            <p>سبد خرید شما خالی است.</p>
        @endif
    </div>



