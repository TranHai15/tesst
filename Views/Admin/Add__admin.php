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
        <h2>Add New Admin</h2>
        <form action="?clt=Add__admin" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="tensp">Ten user</label>
                <input type="text" id="tensp" name="mauser" required>
            </div>
            <div class="form-group">
                <label for="gioithieu">nameuser</label>
                <input type="text" id="gioithieu" name="nameuser" required></input>
            </div>
            <div class="form-group">
                <label for="giagoc">password</label>
                <input type="text" id="giagoc" name="password" required>
            </div>
            <div class="form-group">
                <label for="giagoc">phone</label>
                <input type="text" id="giagoc" name="phone" required>
            </div>
            <input type="submit" value="Add">
        </form>
    </div>
</body>

</html>