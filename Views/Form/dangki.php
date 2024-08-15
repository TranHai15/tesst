<!-- Dang Nhap -->
<?php


?>
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
    <link rel="stylesheet" href="Css/Form/account.css?ver=<?= $randomNumber ?>">
    <link rel="stylesheet" href="Css/Responsive.css?ver=<?= $randomNumber ?>">

</head>

<body>
    <?php include "Views/dungchung/Header.php"; ?>
    <div class="conten">
        <p>Chào mừng bạn đến với Yody</p>
        <h1><span>ĐĂNG</span><span>KÝ</span></h1>
        <?php
        // var_dump($error);
        // var_dump($filterAll);
        ?>
        <div class="error_cha">
            <?php if (!empty($message)) {
                if (isset($message)) {
                    echo  "<div class='error'>$message[message]</div>";
                } else {
                    echo "<div class='thanhcong'> $smg_type</div>";
                }
            }   ?></div>

        <form action="?clt=account" method="post" onchange="input_err()" onsubmit=" return  validate__account()" class="form__account">
            <input type="text" name="name" id="name" placeholder=" Họ va Tên" value="<?php echo (!empty($filterAll['name'])) ? $filterAll['name'] : null; ?>" />
            <div class="error_con">
                <?php echo (!empty($error['name'])) ? "<div class=' phone'> " . reset($error['name']) . "</div>" : null;     ?>
            </div>
            <input type="text" name="phone" id="phone" placeholder=" Số điện thoại" value="<?php echo (!empty($filterAll['phone'])) ? $filterAll['phone'] : null; ?>" />
            <div class="error_con"> <?php echo (!empty($error['phone'])) ? "<div class=' phone'> " . reset($error['phone']) . "</div>" : null;     ?> </div>
            <input type="password" name="password" id="password" placeholder=" Mật Khẩu" value="<?php echo (!empty($filterAll['password'])) ? $filterAll['password'] : null; ?>" />
            <div class="error_con"> <?php echo (!empty($error['password'])) ? "<div class=' password'> " . reset($error['password']) . "</div>" : null;     ?> </div>
            <button onclick="btn()" type="submit">Đăng Ký</button>
        </form>
        <div class="layout">
            <hr />
            <p>Hoặc đăng ký bằng</p>
            <hr />
        </div>
        <div class="face__gg">
            <div class="google">
                <img src="https://bizweb.dktcdn.net/100/438/408/themes/949050/assets/ic_btn_google.svg?1714530454667" alt="" />
            </div>
            <div class="face">
                <img src="https://bizweb.dktcdn.net/100/438/408/themes/949050/assets/ic_btn_facebook.svg?1714530454667" alt="" />
            </div>
        </div>
        <div class="location">
            <h1>
                Bạn đã có tài khoản?
                <a href="?clt=dangnhap">Đăng Nhập Ngay!</a>
            </h1>
        </div>
    </div>
    <?php include "Views/dungchung/Footer.php"; ?>
</body>

<script src="Fontend/Js/validate_form.js"></script>

</html>