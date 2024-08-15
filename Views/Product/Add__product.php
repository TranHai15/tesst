<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin: 4px 0;
            box-sizing: border-box;
        }

        textarea {
            height: 200px;
            resize: none;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Add New Product</h2>
        <form action="?clt=Add" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="tensp">Ten San Pham</label>
                <input type="text" id="tensp" name="tensp" required>
            </div>
            <div class="form-group">
                <label for="gioithieu">Giới Thiệu</label>
                <textarea id="gioithieu" name="gioithieu" required></textarea>
            </div>
            <div class="form-group">
                <label for="mota">Mô Tả</label>
                <textarea id="mota" name="mota" required></textarea>
            </div>
            <div class="form-group">
                <label for="giagoc">Giá Gốc</label>
                <input type="text" id="giagoc" name="giagoc" required>
            </div>
            <div class="form-group">
                <label for="giagoc">Giảm Giá</label>
                <input type="text" id="giagoc" name="giamgia">
            </div>
            <div class="form-group">
                <label for="giagoc">Số Lương</label>
                <input type="text" id="giagoc" name="soluong" required>
            </div>
            <div class="form-group">
                <label for="hinhanh">Ảnh Sản Phẩm</label>
                <input type="file" id="hinhanh" name="hinhanh" required>
            </div>
            <div class="form-group">
                <label for="hinhanh">Ảnh Sản Phẩm 2</label>
                <input type="file" id="hinhanh" name="hinhanh2">
            </div>
            <div class="form-group">
                <label for="Danh Mục">Danh Mục</label>
                <select name="madm" id="">
                    <?php foreach ($bangdanhmuc as $key) : ?>
                        <?php if ($key['madm'] >= 3 && $key['madm'] <= 6) :  ?>
                            <option $title=<?= $key['madm'] ?> value="<?= $key['madm'] ?>"><?= $key['tendm'] ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="Thuoc Tính">Thuộc Tính</label>
                <select id="idthuoctinh" name="idthuoctinh" required>
                    <?php foreach ($bangthuoctinh as $key) : ?>
                        <option value="<?= $key['idthuoctinh'] ?>"><?= $key['Ten'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <input type="submit" value="Add">
        </form>
    </div>
</body>

</html>