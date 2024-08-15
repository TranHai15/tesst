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

        <form action="?clt=update__admin" method="post" enctype="multipart/form-data">
            <input type="hidden" name="mauser" value="<?= $edit['mauser'] ?>">
            <div class="form-group">
                <label for="tensp">Tên Sản Phẩm</label>
                <input type="text" id="tensp" name="nameuser" value="<?= $edit['nameuser'] ?>">
            </div>
            <div class="form-group">
                <label for="gioithieu">password</label>
                <input type="text" id="gioithieu" name="password" value=" <?= $edit['password'] ?>">

                </input>
            </div>
            <div class="form-group full-width">
                <label for="mota">phone</label>
                <input type="text" id="mota" name="phone" value=" <?= $edit['phone'] ?>">

                </input>
            </div>
            <input type="submit" value="UPDATE">
        </form>

    </div>
</body>

</html>