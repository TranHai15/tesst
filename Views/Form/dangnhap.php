<!-- Dang Nhap -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php $min = 1;
    $max = 100;
    $randomNumber = rand($min, $max);
    ?>
    <link rel="stylesheet" href="Css/Resert.css?ver=<?= $randomNumber ?>">
    <link rel="stylesheet" href="Css/Gird.css?ver=<?= $randomNumber ?>">
    <link rel="stylesheet" href="Css/Layout.css?ver=<?= $randomNumber ?>">
    <link rel="stylesheet" href="Css/Form/login.css?ver=<?= $randomNumber ?>">
    <link rel="stylesheet" href="Css/Responsive.css?ver=<?= $randomNumber ?>">

</head>

<body>
    <?php include "Views/dungchung/Header.php"; ?>
    <div class="conten">
        <p>Chào mừng bạn đến với Yody</p>
        <h1> <span>ĐĂNG</span><span>NHẬP</span> </h1>
        <div class="error_cha">
            <?php
            // var_dump($error);
            // var_dump($password__error);
            if (!empty($message)) {
                if (!empty($message['error']) && $message['error']) {
                    echo  "  <div class='error'> $message[error] </div>";
                } else {
                    echo "<div class='thanhcong'> $message</div>";
                }
            }   ?></div>
        <form action="?clt=login" method="post" onsubmit=" return validate__login()" class="form__account">
            <input oninput="inp()" type="text" name="phone" id="phone" placeholder=" Phone" value="<?= !empty($filterAll) ? $filterAll['phone'] : null   ?>">
            <div class="error_con"> <?= (isset($error__phone)) ? "<div class=' phone'> " . reset($error__phone['phone']) . "</div>" : null; ?> </div>
            <input oninput="inp()" type="password" name="password" id="password" placeholder=" Mật Khẩu">
            <div class="error_con"> <?= (isset($error)) ? "<div class='password'> " . reset($error['password']) . "</div>" : null;     ?> </div>
            <button onclick="btn()" type="submit">Đăng Nhập</button>
        </form>
        <div class="forgot">
            <a href="?clt=quenmk">Quên mật khẩu</a>
        </div>
        <div class="layout">
            <hr>
            <p>Hoặc đăng Nhập bằng</p>
            <hr>
        </div>
        <div class="face__gg">
            <div class="google"><img src="https://bizweb.dktcdn.net/100/438/408/themes/949050/assets/ic_btn_google.svg?1714530454667" alt=""></div>
            <div class="face"><img src="https://bizweb.dktcdn.net/100/438/408/themes/949050/assets/ic_btn_facebook.svg?1714530454667" alt=""></div>
        </div>
        <div class="location">
            <h1>Bạn chưa có tài khoản? <a href="?clt=dangki">Đăng Ký Ngay!</a></h1>
        </div>
    </div>
    <?php include "Views/dungchung/Footer.php"; ?>
</body>
<script src="Fontend/Js/login.js"></script>

</html>