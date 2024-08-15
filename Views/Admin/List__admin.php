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

    <h1>Danh Sach Nguoi Dung </h1>
    <table>
        <thead>
            <tr>
                <th>mauser</th>
                <th>nameuser</th>
                <th>password</th>
                <th>phone</th>

                <th><a href="?clt=Add__admin">Them</a></th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($banguser as $key) : ?>
                <tr>
                    <td class="td1"><?= $key['mauser'] ?></td>
                    <td class="td2"><?= $key['nameuser'] ?></td>
                    <td class="td3"><?= $key['password'] ?></td>
                    <td class="td4"><?= $key['phone'] ?></td>
                    <td><a href="?clt=Edit__admin&id=<?= $key['mauser'] ?>">Sua</a>
                        <br>
                        <a onclick="return confirm('Bạn Có muốn xóa sản phẩm này?')" href="?clt=Delete__admin&dl=<?= $key['mauser'] ?>">Xoa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>