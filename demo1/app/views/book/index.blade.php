<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
<h1>{{$tieuDe}}</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Tên</td>
        <td>Giá</td>

    </tr>

    @foreach($books as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->price }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>