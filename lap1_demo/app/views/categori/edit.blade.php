@extends('layout.main')
@section('conpon')
    @if(isset($_SESSION['errors']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
                <li style="color:red;" >{{$error}}</li>
            @endforeach
        </ul>
    @endif
    @if(isset($_SESSION['success']) && isset($_GET['msg']))
        <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif
    <form method="POST" action="{{url('edit-categori-post/'.$categori->id)}}">
        Tên sản phẩm <input type="text" name="usename" value="{{$categori->name}}"><br>
        Hình ảnh <input type="file" name="hinh" value="{{$categori->hinh}}"><br>
        Mô tả <input type="text" name="description" value="{{$categori->description}}"><br>
        <input type="submit" name="sua" value="Sửa ">
    </form>
@endsection
