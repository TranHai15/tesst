<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sửa Danh Mục</title>
</head>

<body>
    <h2>Sửa Danh Mục</h2>


    <form action="?clt=edit_dm" method="post">
        <input type="hidden" name="madm" value="<?php echo $edit['madm']; ?>">
        Tên danh mục mới: <input type="text" name="tendm" value="<?= $edit['tendm']  ?>"><br>
        Past mới: <input type="text" name="past" value="<?= $edit['past']  ?>"><br>
        <input type="submit" name="submit" value="Sửa">
    </form>





</body>

</html>