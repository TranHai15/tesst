<div class="container">
    <div class="header__spacing">
        <!-- Quang cao header -->
        <div class="sale">
            <a href="#"></a>
        </div>
        <!--``````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````` -->
        <!-- Header -->
        <header>
            <div class="header grid wide">
                <!-- header top -->
                <div class="header__Top">
                    <div class="header__Top--left">
                        <div class="header__Top--logo"><a href="?clt=Trangchu"><img src="Images/logo.svg"></a></div>
                        <div class="header__Top--search">
                            <form action="" method="" class="form__header">
                                <input type="text" name="search" id="search" required placeholder="Tìm Kiếm">
                                <button type="submit" id="btn__search"><img src="Images/icon-search.svg"></button></button>
                            </form>
                        </div>
                    </div>

                    <div class="header__Top--right">
                        <div class="header__Top--lienhe">
                            <ul>
                                <li><span><img src="Images/map_tb.svg"></span>Tìm <a id="chinhanh" href="#">267</a> cửa hàng</li>
                                <li><span><img src="Images/call_tb.svg"></span><a href="tel: 0965932120">1800 2068</a> <span class="FREE">FREE</span> </li>
                                <li>
                                    <p>Dặt hàng gọi</p><span><img src="Images/call_tb.svg"></span> <a href="tel: 0965932120">02499986999</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ```````````````````````````````````````````````````end header top``````````````````````````````````````````````````` -->

                <div class="header__Bootom">
                    <ul class="nav">
                        <li>
                            <ul class="nav__Left">
                                <li title="ĐĂNG KÍ NHẬN QUÀ"><a class="nav__dm" href="#">ĐĂNG KÍ NHẬN QUÀ</a></li>
                                <li title="NỮ "><a class="nav__dm" href="?clt=Nu">NỮ</a>
                                    <!-- <div class="nav__list">
                                    </div> -->
                                </li>
                                <li title="NAM "><a class="nav__dm" href="?clt=Nam">NAM</a></li>
                                <li title="TRẺ EM"><a class="nav__dm" href="?clt=Treem">TRẺ EM</a></li>
                                <li title="BỘ SƯU TẬP"><a class="nav__dm" href="#">BỘ SƯU TẬP</a></li>
                                <li title="ĐỒNG "><a class="nav__dm" href="#">ĐỒNG PHỤC</a></li>
                                <!-- <li title="VỀ PHỤC<"><a class="nav__dm" href="#">VỀ YODY</a></li> -->
                                <li title="ĐỐI TÁC YODY"><a class="nav__dm" href="#">ĐỐI TÁC YODY</a></li>
                                <li title="BLOG "><a class="nav__dm" href="#">BLOG</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="nav__Right">
                                <li><span><img src="Images/cart.svg">
                                        <p id="number__product">3</p>
                                    </span><a href="#">GIỎ HÀNG</a></li>
                                <li class="admin">
                                    <?php
                                    $role = admin();
                                    ?>
                                    <?php if ($role == 'admin') :  ?>
                                        <div class="user"><?= $_SESSION['admin'] ?></div>
                                        <div class="sesting"><i class="fa-solid fa-gear"></i>
                                            <ul class="sesting__ul">
                                                <li><a href="?clt=dangxuat">Đăng Xuất</a></li>
                                                <li><a href="?clt=List__product">Admin</a></li>
                                                <li><a href="#">Tài Khoản</a></li>
                                            </ul>
                                        </div>
                                    <?php elseif ($role == 'user') :  ?>
                                        <div class="user"><?= $_SESSION['user'] ?></div>
                                        <div class="sesting"><i class="fa-solid fa-gear"></i>
                                            <ul class="sesting__ul">
                                                <li><a href="?clt=dangxuat">Đăng Xuất</a></li>
                                                <li><a href="#">Tài Khoản</a></li>
                                            </ul>
                                        </div>
                                    <?php else :  ?>
                                        <a href="?clt=dangki">Đăng Kí</a><span>/</span><a href="?clt=dangnhap">Đăng Nhập</a>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </header>


    </div>
    <!-- `````````````````````````````````````````````````````````````End Header````````````````````````````````````````````````````````````` -->

</div>