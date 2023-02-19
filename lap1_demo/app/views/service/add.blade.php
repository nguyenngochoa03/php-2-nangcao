@extends('layout.main')
@section('conpon')
    @if(isset($_SESSION['errors'])&& isset($_GET['msg']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
                <li style="color:red;" >{{$error}}</li>
            @endforeach
        </ul>
    @endif
    @if(isset($_SESSION['success']) && isset($_GET['msg']))
        <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif
    <form method="POST" action="{{url('add-service-post')}}">
        Tên sản phẩm <input type="text" name="usename"><br>
        Hình ảnh <input type="file" name="hinh"><br>
        Đơn giá <input type="text" name="price"><br>
        Mô tả <input type="text" name="description"><br>
        <input type="submit" name="them" value="Thêm ">
    </form>
@endsection
