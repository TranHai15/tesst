<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Định dạng cơ bản cho form và các phần tử */
        form {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        #recoveryOptions {
            margin-top: 20px;
        }

        #recoveryOptions label {
            display: block;
            margin-bottom: 10px;
        }

        #emailRecovery,
        #smsRecovery {
            display: none;
            margin-top: 20px;
        }

        #smsRecovery form {
            margin-top: 10px;
        }


        .iiii {
            padding: 0 2px;
        }
    </style>
</head>

<body>
    <form action="?clt=fogot" method="post" id="forgotPasswordForm">
        <label for="username">Nhap So Phone Cua Ban:</label>
        <input type="text" id="phone" name="phone" required>
        <button type="submit">Gửi yêu cầu</button>
    </form>
</body>

</html>