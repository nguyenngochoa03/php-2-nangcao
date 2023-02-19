@extends('layout.main')
@section('conpon')
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên</td>
            <td>Hình ảnh </td>
            <td>Mô tả</td>
        </tr>
        @foreach($categoris as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td><img src="{{ $value->image}}" alt="" width="100px"></td>
                <td>{{ $value->description}}</td>
                <td><a href="{{ url ('add-categori')}}">Thêm</a></td>
                <td><a href="./edit-categori/{{$value->id}}">Sửa</a></td>
                <td><a href="./delete-product/{{$value->id}}">Xóa</a></td>
            </tr>
        @endforeach
    </table>
@endsection