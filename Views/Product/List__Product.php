<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List__Produc</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        td:not(td:nth-child(1)) {
            text-align: left;
            padding: 8px;
            white-space: nowrap;
            /* Ngăn không cho text xuống dòng */
            overflow: hidden;
            /* Ẩn nội dung tràn */
            text-overflow: ellipsis;
            /* Hiển thị dấu ba chấm khi tràn */
            max-width: 150px;
            min-width: 50px;
            /* Đặt chiều rộng tối đa cho cột */
            max-height: 100px;
            min-height: 50px;
        }

        td:nth-child(1),
        td:nth-child(7),
        td:nth-child(8) {
            min-width: 5px;
            max-width: 10px;
        }

        .header {
            height: 3rem;
            background-color: #555;
            width: 100%;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            justify-content: end;
        }
    </style>
</head>

<body>

    <?php if (isset($message) && $message) :   ?>
        <script>
            alert("<?= $message ?>");
        </script>
    <?php endif; ?>

    <?php require_once("Views/dungchung/headeradmin.php")  ?>
    <header class="header">

        <ul class="menudanhmuc">
            <li><a href="?clt=Add__product">Them San Pham</a></li>
            <!-- <li><a href="?clt=Edit__product&al=all">Sua San Pham</a></li> -->
        </ul>
        <form action="?clt=Select" method="post">
            <select name="madm" id="">
                <?php foreach ($bangdanhmuc as $key) : ?>
                    <?php if ($key['madm'] >= 3 && $key['madm'] <= 6) :  ?>
                        <option $title=<?= $key['madm'] ?> value="<?= $key['madm'] ?>"><?= $key['tendm'] ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
            <input type="submit" name="" id="" value="Select">
        </form>
    </header>
    <h1>Danh Sach San Pham </h1>
    <table>
        <thead>
            <tr>
                <th>masp</th>
                <th>tensp</th>
                <th>gioithieu</th>
                <th>mota</th>
                <th>hinhanh</th>
                <th>hinhanh2</th>
                <th>giagoc</th>
                <th>giamgia</th>
                <th>soluong</th>
                <th>luotmua</th>
                <th><a href="?clt=Add__product">Them</a></th>

            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($select) && !empty($select)) {  ?>
                <?php $sanpham = $select; ?>
            <?php } else { ?>
                <?php $sanpham = $bangsanpham; ?>
            <?php }  ?>
            <?php foreach ($sanpham as $key) : ?>
                <tr>
                    <td class="td1"><?= $key['masp'] ?></td>
                    <td class="td2"><?= $key['tensp'] ?></td>
                    <td class="td3"><?= $key['gioithieu'] ?></td>
                    <td class="td4"><?= $key['mota'] ?></td>
                    <td class="td5"><img src="<?= $key['hinhanh'] ?>" width=40;></td>
                    <td class="td5"><img src="<?= $key['hinhanh2'] ?>" width=40;></td>
                    <td class="td6"><?= $key['giagoc'] ?></td>
                    <td class="td8"><?= $key['giamgia'] ?></td>
                    <td class="td7"><?= $key['soluong'] ?></td>
                    <td class="td8"><?= $key['luotmua'] ?></td>
                    <td><a href="?clt=Edit__product&id=<?= $key['masp'] ?>">Sua</a>
                        <br>
                        <a onclick="return confirm('Bạn Có muốn xóa sản phẩm này?')" href="?clt=Delete&dl=<?= $key['masp'] ?>">Xoa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>