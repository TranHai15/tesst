<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Quản Lý Danh Mục</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <h2>Quản Lý Danh Mục</h2>
    <a href="?clt=Add__danhmuc">Thêm Danh Mục</a>
    <table>
        <tr>
            <th>Mã Danh Mục</th>
            <th>Tên Danh Mục</th>
            <th>Past</th>
            <th>Hành Động</th>
        </tr>


        <?php
        if (is_array($data_danhmuc)) {
            foreach ($data_danhmuc as $row) {
                echo "<tr>";
                echo "<td>" . $row["madm"] . "</td>";
                echo "<td>" . $row["tendm"] . "</td>";
                echo "<td>" . $row["past"] . "</td>";
                echo "<td>";
                echo "<a href='?clt=Edit__danhmuc&madm=" . $row["madm"] . "'>Sửa</a> | ";
                echo "<a href='?clt=Delete__danhmuc&madm=" . $row["madm"] . "'>Xóa</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Không có danh mục nào</td></tr>";
        }
        ?>

    </table>
</body>

</html>