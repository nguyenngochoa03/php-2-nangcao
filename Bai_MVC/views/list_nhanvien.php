<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h4">Danh sách nhân viên</h4>
<table  border="1">
    <thead >
    <tr>

        <td>id</td>
        <td>Tên</td>
        <td>lương</td>
        <td>Trạng thái</td>
    </tr>
    </thead>
    <tbody>
     <?php
      foreach ($listnhanvien as $key=> $value){
     ?>

    <tr>
        <td><?php echo $value['id']; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['luong']; ?></td>
        <td><a onclick="return deletename('<?php echo $value['ten'] ?>')" href="?url=xoanhanvien&id=<?= $value["id"] ?>">DELETE</a></td>
    </tr>

<?php  }?>
     <tr>
         <td><a href="?url=themnhanvien">Thêm</a></td>
     </tr>

    </tbody>
    <script>
        function deletename(name) {
            return confirm("Bạn có chắc chắn muốn xóa nhân viên :" + name + " không ?")
        }
    </script>
</table>
</body>
</html>




