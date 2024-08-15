<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Resert.css">
    <link rel="stylesheet" href="Css/Gird.css">
    <link rel="stylesheet" href="Css/Layout.css?ver=5">
    <link rel="stylesheet" href="Css/nam.css">
    <title>Document</title>
</head>

<body>
    <?php require_once "Views/dungchung/Header.php" ?>
    <div class="connnnnnn">
        <section>
            <div class="Products grid wide row">
                <?php foreach ($data as $key) : ?>
                    <div class="row col  l-3 m-6 c-12">
                        <a href="?clt=ct&<?= $key['tensp'] ?>&product=<?= $key['masp'] ?>">
                            <article class="Sanpham ">
                                <div class="Sanpham__image">
                                    <img src="<?= $key['hinhanh']  ?>" alt="<?= $key['tensp'] ?>">
                                </div>
                                <div class="SanPham__name">
                                    <h3><?= $key['tensp'] ?></h3>
                                </div>
                                <div class="Sanpham__price ">
                                    <div class="price__new "><?= $key['giagoc'] ?> đ</div>
                                    <div class="price__old "><?= $key['giamgia'] > 0 ? $key['giamgia'] . " đ" : null   ?></div>
                                </div>
                            </article>
                        </a>
                    </div>
                <?php endforeach; ?>
                <!-- ---- -->
            </div>
        </section>
    </div>
    <?php require_once "Views/dungchung/Footer.php" ?>
</body>

</html>