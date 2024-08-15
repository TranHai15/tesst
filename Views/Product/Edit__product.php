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
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
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
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        input[type="file"] {
            padding: 3px;
        }

        .full-width {
            grid-column: 1 / -1;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            grid-column: 1 / -1;
            justify-self: center;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .side-form {
            background-color: #f9f9f9;
            border: 1px solid #dddddd;
            padding: 20px;
            border-radius: 5px;
            grid-column: span 1;
        }
    </style>
</head>

<body>
    <?php if (isset($message) && $message) :   ?>
        <script>
            alert("<?= $message ?>");
        </script>
    <?php endif; ?>
    <div class="container">
        <h2>Edit New Product</h2>
        <?php foreach ($edit as $sp) : ?>
            <form action="?clt=update" method="post" enctype="multipart/form-data">
                <input type="hidden" name="masp" value="<?= $sp['masp'] ?>">
                <div class="form-group">
                    <label for="tensp">Tên Sản Phẩm</label>
                    <input type="text" id="tensp" name="tensp" value="<?= $sp['tensp'] ?>">
                </div>
                <div class="form-group">
                    <label for="gioithieu">Giới Thiệu</label>
                    <textarea id="gioithieu" name="gioithieu">
                    <?= $sp['gioithieu'] ?>
                    </textarea>
                </div>
                <div class="form-group full-width">
                    <label for="mota">Mô Tả</label>
                    <textarea id="mota" name="mota">
                    <?= $sp['mota'] ?>
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="giagoc">Giá Gốc</label>
                    <input type="text" id="giagoc" name="giagoc" value="<?= $sp['giagoc'] ?>">
                </div>
                <div class="form-group">
                    <label for="hinhanh">Giảm Giá</label>
                    <input type="text" id="hinhanh" name="giamgia" value="<?= $sp['giamgia'] ?>">
                </div>
                <div class="form-group">
                    <label for="hinhanh">Ảnh Sản Phẩm</label>
                    <img width="55" src="<?= $sp['hinhanh'] ?>" alt="">
                    <input type="file" id="hinhanh" name="hinhanh">
                    <input type="hidden" id="hinhanh" name="hinhanh" value="<?= $sp['hinhanh'] ?>">
                </div>
                <div class="form-group">
                    <label for="hinhanh">Ảnh Sản Phẩm 2</label>
                    <img width="55" src="<?= $sp['hinhanh2'] ?>" alt="">
                    <input type="file" id="hinhanh" name="hinhanh2">
                    <input type="hidden" id="hinhanh" name="hinhanh2" value="<?= $sp['hinhanh2'] ?>">
                </div>

                <div class="form-group">
                    <label for="madm">Danh Mục</label>
                    <select name="madm" id="madm">
                        <?php foreach ($bangdanhmuc as $dm) : ?>
                            <?php if ($dm['madm'] >= 3 && $dm['madm'] <= 6) :  ?>
                                <option value="<?= $dm['madm'] ?>" <?= ($dm['madm'] == $sp['madm']) ? 'selected' : "" ?>><?= $dm['tendm'] ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="idthuoctinh">Thuộc Tính</label>
                    <select id="idthuoctinh" name="idthuoctinh">
                        <?php foreach ($bangthuoctinh as $tt) : ?>
                            <option value="<?= $tt['idthuoctinh'] ?>" <?= ($tt['idthuoctinh'] == $sp['idthuoctinh']) ? 'selected' : "" ?>><?= $tt['Ten'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <input type="submit" value="UPDATE">
            </form>
        <?php endforeach; ?>
    </div>
</body>

</html>