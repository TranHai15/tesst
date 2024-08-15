<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Resert.css">
    <link rel="stylesheet" href="Css/Gird.css">
    <link rel="stylesheet" href="Css/Layout.css">
    <link rel="stylesheet" href="Css/Chitiet.css?ver=2">
    <link rel="stylesheet" href="Css/Responsive.css">
    <title>Document</title>
</head>

<body>
    <?php require_once "Views/dungchung/Header.php" ?>
    <div class="container grid wide">
        <div class="past__product grid row">
            <?php echo $_GET['clt'] . " / " . $datasanphamchitiet['tensp']   ?>
        </div>
        <div class="view__product grid row  ">
            <div class="Product__left  l-8 ">
                <div class="Left__image  row col ">

                    <div class="img col l-6"><img src="<?= $datasanphamchitiet['hinhanh'] ?>" alt=""></div>
                    <div class="img col l-6"><img src="<?= $datasanphamchitiet['hinhanh2'] ?>" alt=""></div>

                </div>
                <div class="Product__about">
                    <hr>
                    <div class="about__dactinh">
                        <div class="dactinhnoibat">ĐẶC TÍNH NỔI BẬT</div>
                        <div class="header">
                            <img src="https://bizweb.dktcdn.net/100/438/408/files/product-highlight-airycool.jpg?v=1681271037617" alt="Cool Fabric" />
                        </div>
                        <div class="features">
                            <ul>
                                <li>Áo polo nữ Airycool thoáng mát - thiết kế mới dành cho mùa hè</li>
                                <li>Thành phần: 85% Nylon + 15% Spandex</li>
                                <li>
                                    Sợi vải có kết cấu và kiểu dệt riêng biệt tạo khả năng chạm mát tức
                                    thì khi chạm da cao hơn so với vải thông thường
                                </li>
                                <li>Co giãn và đàn hồi tốt, thấm hút mồ hôi hiệu quả và nhanh khô</li>
                                <li>Sợi Nylon có kích thước siêu mảnh mang tới cảm giác mềm mại</li>
                                <li>Sản phẩm mới nhất nằm trong thiết kế áo polo đôi của YODY</li>
                                <li>YODY - Look good. Feel good.</li>
                                <li>Sản xuất tại Việt Nam</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product__comment"></div>
            </div>
            <div class="Product__right   l-4 ">
                <div class="Right__name"><?= $datasanphamchitiet['tensp'] ?> </div>
                <div class="right__danhgia">
                    <div class="maloai">APN6162-DEN</div>
                    <span>|</span>
                    <div class="luotmua">Đã Bán <?= $datasanphamchitiet['luotmua'] ?>k</div>
                    <span>|</span>
                    <div class="danhgia">
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <span>(5)</span>
                    </div>
                </div>
                <div class="right__price"><?= $datasanphamchitiet['giagoc'] ?></div>
                <div class="product__color">Màu Sắc: Đỏ</div>
                <div class="right__product__select">
                    <img width="44" src="<?= $datasanphamchitiet['hinhanh'] ?>" alt="">
                </div>
                <div class="kichthuoc">Kích Thước</div>
                <div class="right__number">
                    <ul>
                        <li>X</li>
                        <li>XML</li>
                        <li>XXL</li>
                    </ul>
                </div>

                <div class="soluong">
                    <span> <i class="fa-solid fa-minus"></i></span>
                    <span id="soluong">1</span>
                    <span> <i class="fa-solid fa-plus"></i></span>
                </div>
                <div class="right__mua">
                    <div class="add__cart__product btn__cart">Them Vao Gio Hang</div>
                    <div class="right__now__product btn__cart">Mua Ngay</div>
                </div>
                <div class="bosuutap">
                    <h2>Bo sua tap</h2>
                    <ul class=" dexuatbosuutap row">
                        <li class="col">
                            <a href="#">
                                <article>
                                    <img width="180" src="https://bizweb.dktcdn.net/100/438/408/products/cvn5096-den-apn5046-ddo-2.jpg?v=1690163788930" alt="">
                                </article>
                            </a>
                        </li>
                        <li class="col">
                            <a href="#">
                                <article>
                                    <img width="180" src="https://bizweb.dktcdn.net/100/438/408/products/cvn5096-den-apn5046-ddo-2.jpg?v=1690163788930" alt="">
                                </article>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="danhriengchoban ">DÀNH RIÊNG CHO BẠN</div>
        <div class="dexuat grid row">
            <?php foreach ($danhriengchoban as $key) :  ?>
                <div class="col l-2">
                    <a href="?clt=chitietsanpham&id=<?= $key['masp'] ?>" class="Sanpham-link">
                        <article title="<?= $key['tensp'] ?>" class="Sanpham">
                            <div class="Sanpham__image"><img width="100%" src="<?= $key['hinhanh'] ?>"></div>
                            <div class="Sanpham__title">
                                <h2><?= $key['tensp'] ?></h2>
                            </div>
                            <div class="Sanpham__price row col">
                                <div class="Sanpham__price--old l-o-1"><?= ($key['giamgia'] > 0) ? $key['giamgia'] . "đ" : $key['giagoc'] . "đ"  ?></div>
                            </div>
                            <div class="xemngay">Xem Ngay</div>
                        </article>
                    </a>
                </div>
            <?php endforeach;  ?>
        </div>
    </div>
    <div class="space"></div>
    <?php require_once "Views/dungchung/Footer.php" ?>
</body>

</html>