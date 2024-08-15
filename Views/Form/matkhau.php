<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2><?= isset($data) ? "Chao Ban:" . $data['nameuser'] : null   ?> </h2>
    <form action="?clt=datlai" method="post" id="forgotPasswordForm">
        <label for="username">Nhap Lai Mat Khau:</label>
        <input type="text" id="password" name="password" required>
        <button type="submit">Gửi yêu cầu</button>
    </form>
</body>

</html>