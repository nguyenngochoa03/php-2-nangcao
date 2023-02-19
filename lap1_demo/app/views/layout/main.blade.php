<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layout.style')
    <title>{{$title}}</title>

</head>
<body>
<div class="form-group">
    <h1>{{$tieuDe}}</h1>
    <div class="menu">
        <ul>
            <li><a href="{{url('test')}}">Product</a></li>
            <li><a href="{{ url('listcategori') }}">Category</a></li>
            <li><a href="index.php?url=themdonhang">The order</a></li>
            <li><a href="index.php?url=themnguoidung">User</a></li>
            <li><a href="index.php?url=/">Statistics</a></li>
            <li><a href="{{url('listservice')}}">Service</a></li>
        </ul>
    </div>
    <section class="compon">
        @yield('conpon')
    </section>
<footer>
    <span>Bản quyền </span>
</footer>
</div>
</body>
</html>


