<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link Css -->
    <?php $min = 1;
    $max = 100;
    $randomNumber = rand($min, $max);
    ?>
    <link rel="stylesheet" href="Css/Resert.css">
    <link rel="stylesheet" href="Css/Gird.css">
    <link rel="stylesheet" href="Css/Layout.css?ver=5">
    <link rel="stylesheet" href="Css/Trangchu.css">
    <link rel="stylesheet" href="Css/Responsive.css">
    <title>Home Yody</title>
</head>

<body>

    <?php require_once "Views/dungchung/Header.php" ?>
    <?php require_once "Views/dungchung/sale.php" ?>
    <div class="container grid wide">
        <section id="Danhmuc">
            <div class="Danhmuc__title row col ">
                <h3>HÀNG MỚI GIÁ TỐT </h3>
                <span><a href="#">Xem Thêm <img src="https://bizweb.dktcdn.net/100/438/408/themes/953050/assets/arrow-show-more.svg?1717667908828"></a></span>
            </div>
            <div class="Danhmuc__product row col ">
                <div class="Danhmuc__product--sale l-2  ">
                    <a href="#"> <img src="https://bizweb.dktcdn.net/100/438/408/themes/953050/assets/home_preivew_sanpham_2_image_desktop.jpg?1717696810090" alt="HÀNG MỚI GIÁ TỐT" title="HÀNG MỚI GIÁ TỐT">
                    </a>
                </div>
                <div class="Danhmuc__product--sanpham l-10">
                    <span onclick="prever()" class="preproduct  listsles "><img src="Images/pre.svg"></span>
                    <div class="con_product" id="left">
                        <div class=" grid row  ">
                            <?php foreach ($datasanphammoi as $key) :  ?>
                                <div class="col l-3">
                                    <a href="?clt=chitietsanpham&id=<?= $key['masp'] ?>" class="Sanpham-link">
                                        <article title="<?= $key['tensp'] ?>" class="Sanpham">
                                            <div class="Sanpham__image"><img src="<?= $key['hinhanh'] ?>"></div>
                                            <div class="Sanpham__title">
                                                <h2><?= $key['tensp'] ?></h2>
                                            </div>
                                            <div class="Sanpham__price row col">
                                                <div class="Sanpham__price--new"><?= $key['giagoc'] ?>đ</div>
                                                <div class="Sanpham__price--old l-o-1"><?= ($key['giamgia'] > 0) ? $key['giamgia'] . "đ" : null  ?></div>
                                            </div>
                                            <!-- <div class="Sanpham__sale"><?= $key['luotmua'] ?></div> -->
                                        </article>
                                    </a>
                                </div>
                            <?php endforeach;  ?>
                        </div>
                    </div>
                    <span onclick="next()" class="nextprocuct  listsles "><img src="Images/icon-next-danhmuc.svg"></span>
                </div>
            </div>
        </section>

        <section id="Danhmuc">
            <div class="Danhmuc__title row col ">
                <h3>BÁN CHẠY NHẤT TUẦN QUA </h3>
                <span><a href="#">Xem Thêm <img src="https://bizweb.dktcdn.net/100/438/408/themes/953050/assets/arrow-show-more.svg?1717667908828"></a></span>
            </div>
            <div class="Danhmuc__product row col ">
                <div class="Danhmuc__product--sale l-2  ">
                    <a href="#"> <img src="https://bizweb.dktcdn.net/100/438/408/themes/953050/assets/home_preivew_sanpham_3_image_desktop.jpg?1717837635754" alt="HÀNG MỚI GIÁ TỐT" title="HÀNG MỚI GIÁ TỐT">
                    </a>
                </div>
                <div class="Danhmuc__product--sanpham l-10">
                    <span onclick="prever()" class="preproduct  listsles "><img src="Images/pre.svg"></span>
                    <div class="con_product" id="left">
                        <div class=" grid row  ">
                            <?php foreach ($banchay as $key) :  ?>
                                <div class="col l-3">
                                    <a href="?clt=chitietsanpham&id=<?= $key['masp'] ?>" class="Sanpham-link">
                                        <article title="<?= $key['tensp'] ?>" class="Sanpham">
                                            <div class="Sanpham__image"><img src="<?= $key['hinhanh'] ?>"></div>
                                            <div class="Sanpham__title">
                                                <h2><?= $key['tensp'] ?></h2>
                                            </div>
                                            <div class="Sanpham__price row col">
                                                <div class="Sanpham__price--new"><?= $key['giagoc'] ?>đ</div>
                                                <div class="Sanpham__price--old l-o-1"><?= ($key['giamgia'] > 0) ? $key['giamgia'] . "đ" : null  ?></div>
                                            </div>
                                            <!-- <div class="Sanpham__sale"><?= $key['luotmua'] ?></div> -->
                                        </article>
                                    </a>
                                </div>
                            <?php endforeach;  ?>
                        </div>
                    </div>
                    <span onclick="next()" class="nextprocuct  listsles "><img src="Images/icon-next-danhmuc.svg"></span>
                </div>
            </div>
        </section>

        <section id="Danhmuc">
            <div class="Danhmuc__title row col ">
                <h3>YODY JEANS FLEX </h3>
                <span><a href="#">Xem Thêm <img src="https://bizweb.dktcdn.net/100/438/408/themes/953050/assets/arrow-show-more.svg?1717667908828"></a></span>
            </div>
            <div class="Danhmuc__product row col ">
                <div class="Danhmuc__product--sale l-2  ">
                    <a href="#"> <img src="https://bizweb.dktcdn.net/100/438/408/themes/953050/assets/home_preivew_sanpham_7_image_desktop.jpg?1717837635754" alt="HÀNG MỚI GIÁ TỐT" title="HÀNG MỚI GIÁ TỐT">
                    </a>
                </div>
                <div class="Danhmuc__product--sanpham l-10">
                    <span onclick="prever()" class="preproduct  listsles "><img src="Images/pre.svg"></span>
                    <div class="con_product" id="left">
                        <div class=" grid row  ">
                            <?php foreach ($yody as $key) :  ?>
                                <div class="col l-3">
                                    <a href="?clt=chitietsanpham&id=<?= $key['masp'] ?>" class="Sanpham-link">
                                        <article title="<?= $key['tensp'] ?>" class="Sanpham">
                                            <div class="Sanpham__image"><img src="<?= $key['hinhanh'] ?>"></div>
                                            <div class="Sanpham__title">
                                                <h2><?= $key['tensp'] ?></h2>
                                            </div>
                                            <div class="Sanpham__price row col">
                                                <div class="Sanpham__price--new"><?= $key['giagoc'] ?>đ</div>
                                                <div class="Sanpham__price--old l-o-1"><?= ($key['giamgia'] > 0) ? $key['giamgia'] . "đ" : null  ?></div>
                                            </div>
                                            <!-- <div class="Sanpham__sale"><?= $key['luotmua'] ?></div> -->
                                        </article>
                                    </a>
                                </div>
                            <?php endforeach;  ?>
                        </div>
                    </div>
                    <span onclick="next()" class="nextprocuct  listsles "><img src="Images/icon-next-danhmuc.svg"></span>
                </div>
            </div>
        </section>

        <!-- <section id="Danhmuc"> -->
        <!-- <div class="Danhmuc__title row col ">
                <h3>ÁO THUN NĂNG ĐỘNG </h3>
                <span><a href="#">Xem Thêm <img src="https://bizweb.dktcdn.net/100/438/408/themes/953050/assets/arrow-show-more.svg?1717667908828"></a></span>
            </div>
            <div class="Danhmuc__product row col ">
                <div class="Danhmuc__product--sale l-2  ">
                    <a href="#"> <img src="https://bizweb.dktcdn.net/100/438/408/themes/953050/assets/home_preivew_sanpham_8_image_desktop.jpg?1717837635754" alt="HÀNG MỚI GIÁ TỐT" title="HÀNG MỚI GIÁ TỐT">
                    </a>
                </div>
                <div class="Danhmuc__product--sanpham l-10">
                    <span onclick="prever()" class="preproduct  listsles "><img src="Images/pre.svg"></span>
                    <div class="con_product" id="left">
                        <div class=" grid row  "> -->
        <?php foreach ($datasanphammoi as $key) :  ?>
            <!-- <div class="col l-3">
                                    <a href="?clt=chitietsanpham&id=<?= $key['masp'] ?>" class="Sanpham-link">
                                        <article title="<?= $key['tensp'] ?>" class="Sanpham">
                                            <div class="Sanpham__image"><img src="<?= $key['hinhanh'] ?>"></div>
                                            <div class="Sanpham__title">
                                                <h2><?= $key['tensp'] ?></h2>
                                            </div>
                                            <div class="Sanpham__price row col">
                                                <div class="Sanpham__price--new"><?= $key['giagoc'] ?>đ</div>
                                                <div class="Sanpham__price--old l-o-1"><?= ($key['giamgia'] > 0) ? $key['giamgia'] . "đ" : null  ?></div>
                                            </div>
                                            <!-- <div class="Sanpham__sale"><?= $key['luotmua'] ?></div> -->
            <!-- </article>
                                    </a>
                                </div>  -->
        <?php endforeach;  ?>
        <!-- </div>
    </div>
    <span onclick="next()" class="nextprocuct  listsles "><img src="Images/icon-next-danhmuc.svg"></span>
    </div>
    </div> -->
        <!-- </section> -->

        <!-- <section id="Danhmuc">
            <div class="Danhmuc__title row col ">
                <h3>YODY SPORT - Thoải mái vận động </h3>
                <span><a href="#">Xem Thêm <img src="https://bizweb.dktcdn.net/100/438/408/themes/953050/assets/arrow-show-more.svg?1717667908828"></a></span>
            </div>
            <div class="Danhmuc__product row col ">
                <div class="Danhmuc__product--sale l-2  ">
                    <a href="#"> <img src="https://bizweb.dktcdn.net/100/438/408/themes/953050/assets/home_preivew_sanpham_6_image_desktop.jpg?1717837635754" alt="HÀNG MỚI GIÁ TỐT" title="HÀNG MỚI GIÁ TỐT">
                    </a>
                </div>
                <div class="Danhmuc__product--sanpham l-10">
                    <span onclick="prever()" class="preproduct  listsles "><img src="Images/pre.svg"></span>
                    <div class="con_product" id="left">
                        <div class=" grid row  "> -->
        <?php foreach ($datasanphammoi as $key) :  ?>
            <!-- <div class="col l-3">
                                    <a href="?clt=chitietsanpham&id=<?= $key['masp'] ?>" class="Sanpham-link">
                                        <article title="<?= $key['tensp'] ?>" class="Sanpham">
                                            <div class="Sanpham__image"><img src="<?= $key['hinhanh'] ?>"></div>
                                            <div class="Sanpham__title">
                                                <h2><?= $key['tensp'] ?></h2>
                                            </div>
                                            <div class="Sanpham__price row col">
                                                <div class="Sanpham__price--new"><?= $key['giagoc'] ?>đ</div>
                                                <div class="Sanpham__price--old l-o-1"><?= ($key['giamgia'] > 0) ? $key['giamgia'] . "đ" : null  ?></div>
                                            </div>
                                            <!-- <div class="Sanpham__sale"><?= $key['luotmua'] ?></div> -->
            <!-- </article>
                                    </a>
                                </div>  -->
        <?php endforeach;  ?>
        <!-- </div>
                    </div>
                    <span onclick="next()" class="nextprocuct  listsles "><img src="Images/icon-next-danhmuc.svg"></span>
                </div>
            </div>
        </section> -->

        <!-- <section id="Danhmuc">
            <div class="Danhmuc__title row col ">
                <h3>YODY OFFICE - Tự tin nơi công sở </h3>
                <span><a href="#">Xem Thêm <img src="https://bizweb.dktcdn.net/100/438/408/themes/953050/assets/arrow-show-more.svg?1717667908828"></a></span>
            </div>
            <div class="Danhmuc__product row col ">
                <div class="Danhmuc__product--sale l-2  ">
                    <a href="#"> <img src="https://bizweb.dktcdn.net/100/438/408/themes/953050/assets/home_preivew_sanpham_4_image_desktop.jpg?1717837635754" alt="HÀNG MỚI GIÁ TỐT" title="HÀNG MỚI GIÁ TỐT">
                    </a>
                </div>
                <div class="Danhmuc__product--sanpham l-10">
                    <span onclick="prever()" class="preproduct  listsles "><img src="Images/pre.svg"></span>
                    <div class="con_product" id="left">
                        <div class=" grid row  "> -->
        <?php foreach ($datasanphammoi as $key) :  ?>
            <!-- <div class="col l-3">
                                    <a href="?clt=chitietsanpham&id=<?= $key['masp'] ?>" class="Sanpham-link">
                                        <article title="<?= $key['tensp'] ?>" class="Sanpham">
                                            <div class="Sanpham__image"><img src="<?= $key['hinhanh'] ?>"></div>
                                            <div class="Sanpham__title">
                                                <h2><?= $key['tensp'] ?></h2>
                                            </div>
                                            <div class="Sanpham__price row col">
                                                <div class="Sanpham__price--new"><?= $key['giagoc'] ?>đ</div>
                                                <div class="Sanpham__price--old l-o-1"><?= ($key['giamgia'] > 0) ? $key['giamgia'] . "đ" : null  ?></div>
                                            </div>
                                            <!-- <div class="Sanpham__sale"><?= $key['luotmua'] ?></div> -->
            <!-- </article>
                                    </a>
                                </div>  -->
        <?php endforeach;  ?>
        <!-- </div>
                    </div>
                    <span onclick="next()" class="nextprocuct  listsles "><img src="Images/icon-next-danhmuc.svg"></span>
                </div>
            </div>
        </section> -->

        <!-- <section id="Danhmuc">
            <div class="Danhmuc__title row col ">
                <h3>YODY POLO - Ngăn mùi hiệu quả </h3>
                <span><a href="#">Xem Thêm <img src="https://bizweb.dktcdn.net/100/438/408/themes/953050/assets/arrow-show-more.svg?1717667908828"></a></span>
            </div>
            <div class="Danhmuc__product row col ">
                <div class="Danhmuc__product--sale l-2  ">
                    <a href="#"> <img src="https://bizweb.dktcdn.net/100/438/408/themes/953050/assets/home_preivew_sanpham_5_image_desktop.jpg?1717837635754" alt="HÀNG MỚI GIÁ TỐT" title="HÀNG MỚI GIÁ TỐT">
                    </a>
                </div>
                <div class="Danhmuc__product--sanpham l-10">
                    <span onclick="prever()" class="preproduct  listsles "><img src="Images/pre.svg"></span>
                    <div class="con_product" id="left">
                        <div class=" grid row  "> -->
        <?php foreach ($datasanphammoi as $key) :  ?>
            <!-- <div class="col l-3">
                                    <a href="?clt=chitietsanpham&id=<?= $key['masp'] ?>" class="Sanpham-link">
                                        <article title="<?= $key['tensp'] ?>" class="Sanpham">
                                            <div class="Sanpham__image"><img src="<?= $key['hinhanh'] ?>"></div>
                                            <div class="Sanpham__title">
                                                <h2><?= $key['tensp'] ?></h2>
                                            </div>
                                            <div class="Sanpham__price row col">
                                                <div class="Sanpham__price--new"><?= $key['giagoc'] ?>đ</div>
                                                <div class="Sanpham__price--old l-o-1"><?= ($key['giamgia'] > 0) ? $key['giamgia'] . "đ" : null  ?></div>
                                            </div>
                                            <!-- <div class="Sanpham__sale"><?= $key['luotmua'] ?></div> -->
            <!-- </article>
                                    </a>
                                </div> -->
        <?php endforeach;  ?>
        <!-- </div>
                    </div>
                    <span onclick="next()" class="nextprocuct  listsles "><img src="Images/icon-next-danhmuc.svg"></span>
                </div>
            </div>
        </section> -->


    </div>


    <?php require_once "Views/dungchung/Footer.php" ?>
</body>
<script>
    var b = 0; // Biến lưu trữ giá trị dịch chuyển ban đầu
    function next() {

        // Kiểm tra điều kiện giá trị của b
        if (b > -442) {

            const pre = document.querySelector(".preproduct").style.opacity = "1";
        } else {
            const next = document.querySelector(".nextprocuct").style.opacity = "0.3";

        }
        if (b > -500) {
            // Lấy class sản phẩm
            const sanpham = document.querySelectorAll(".Sanpham");
            sanpham.forEach(function(event) {
                event.style.transform = `translateX(${b - 442}%)`;
            });
            b -= 442;
        } else {
            console.log("kkkk");
        }
    }

    function prever() {
        console.log(b);
        if (b < -442) {
            const pre = document.querySelector(".preproduct").style.opacity = "1";
            const next = document.querySelector(".nextprocuct").style.opacity = "1";
        } else if (b > -442) {
            const next = document.querySelector(".nextprocuct").style.opacity = "1";
        } else {
            const pre = document.querySelector(".preproduct").style.opacity = "0.3";
        }
        // Kiểm tra điều kiện của b để không vượt quá giới hạn
        if (b < 0) {
            // Lấy class sản phẩm
            const sanpham = document.querySelectorAll(".Sanpham");
            // console.log(b);
            sanpham.forEach(function(event) {
                event.style.transform = `translateX(${b + 442}%)`;
            });
            b += 442;
        } else {
            console.log("huuhuu");
        }
    }
</script>
<script>
    var start = document.querySelectorAll(".items1");

    function precateroy() {
        start.forEach(function(event) {
            event.style.transform = " translateX(0%)"

        })
    }

    function nextcateroy() {
        start.forEach(function(event) {
            event.style.transform = " translateX(-340%)"
        })
    }
</script>

</html>