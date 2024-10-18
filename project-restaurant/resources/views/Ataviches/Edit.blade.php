<form action="" method="post" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="form-Edit">
        <div id="name"><input type="text" class="name" value="{{$Ataviches->name}}"></div>
    </div>
</form>
