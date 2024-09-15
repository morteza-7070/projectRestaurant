
<div class="container">
    <form action="{{route('discount.update')}}" method="post">
        @csrf
        @method('PUT')
    </form>
</div>

