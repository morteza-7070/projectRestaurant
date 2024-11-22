

@if($cart)
    <h2>Your Cart</h2>
    <ul>
        @foreach($cart->products as $item)
            <li>
                {{ $item['product']->name }} - {{ $item['counts'] }} x {{ $item['product']->price }} $
            </li>
        @endforeach
    </ul>
    <p>Total Price: {{ $cart->price }} $</p>
    <p>Total Items: {{ $cart->counts }}</p>
@else
    <p>Your cart is empty!</p>
@endif

