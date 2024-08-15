<!-- Product__C -->

<?php
class Procuct__C
{
    // Dieu Huong 
    public function List($file = "List__product")
    {
        $modle = new Product__M;
        $masp = $_GET['id'] ?? "";
        $bangdanhmuc =  $modle->getAll("danhmuc");
        $bangthuoctinh = $modle->getAll("thuoctinh");
        $bangsanpham = $modle->getAll("sanpham");
        $edit = $modle->getOne($masp);
        // $edit = $_GET['al'] ?  $bangsanpham : $editone;
        $message = $_SESSION['message'] ?? "";
        unset($_SESSION['message']);
        View("Product", $file, ['message' => $message, 'bangdanhmuc' => $bangdanhmuc, 'bangthuoctinh' => $bangthuoctinh, 'bangsanpham' => $bangsanpham,  'edit' => $edit]);
    }

    // Sua Doi Du Lieu
    public function Update__product()
    {
        if (isPost()) {
            $data = $_POST;
            $masp = $data['masp'];
            $tensp = $data['tensp'];
            $gt = $data['gioithieu'];
            $mota = $data['mota'];
            $giagoc = $data['giagoc'];
            $giamgia = $data['giamgia'];
            $danhmuc = $data['madm'];
            $thuoctinh = $data['idthuoctinh'];
            $file__hinh = $_FILES['hinhanh'];
            $file__hinh2 = $_FILES['hinhanh2'];
            if ($file__hinh['size'] > 0) {
                $past = "img/" . $file__hinh['name'];
                move_uploaded_file($file__hinh['tmp_name'], $past);
            } else {
                $past = $data['hinhanh'];
            }
            if ($file__hinh2['size'] > 0) {
                $past2 = "img/" . $file__hinh2['name'];
                move_uploaded_file($file__hinh2['tmp_name'], $past2);
            } else {
                $past2 = $data['hinhanh2'];
            }
            $modle = new Product__M;
            $up = $modle->update($tensp, $gt, $mota, $past, $past2, $giagoc, $giamgia, $danhmuc, $thuoctinh,  $masp);

            if ($up) {
                $_SESSION['message'] = "Sua Doi Thanh Cong";
                header("location: ?clt=List__product");
                exit;
            } else {
                $_SESSION['message'] = "Sua Doi That Bai";
                header("location: ?clt=Edit__product");
                exit;
            }
        } else {
            echo " Khong Tim Duoc San Pham Can Sua";
        }
    }

    // Them Du Lieu
    public function Add__product()
    {
        if (isPost()) {
            $data = $_POST;
            $tensp = $data['tensp'];
            $gt = $data['gioithieu'];
            $mota = $data['mota'];
            $giagoc = $data['giagoc'];
            $danhmuc = $data['madm'];
            $soluong = $data['soluong'];
            $thuoctinh = $data['idthuoctinh'];
            $file__hinh = $_FILES['hinhanh'];
            $file__hinh2 = $_FILES['hinhanh2'];
            $past = "";
            $past2 = "";
            $giamgia = " ";
            if (!empty($data['giamgia'])) {
                $giamgia = $data['giamgia'];
            }
            if ($file__hinh['size'] > 0) {
                $past = "img/" . $file__hinh['name'];
                $data['hinhanh'] = $past;
                move_uploaded_file($file__hinh['tmp_name'], $past);
            }
            if ($file__hinh2['size'] > 0) {
                $past = "img/" . $file__hinh2['name'];
                $data['hinhanh2'] = $past2;
                move_uploaded_file($file__hinh2['tmp_name'], $past2);
            }
            $modle = new Product__M;
            $add = $modle->Add($tensp, $gt, $mota, $past, $past2, $giagoc, $giamgia, $soluong, $danhmuc, $thuoctinh);

            if ($add) {
                $_SESSION['message'] = "Them Thanh Cong";
                header("location: ?clt=List__product");
                exit;
            } else {
                $_SESSION['message'] = "Them that Bai";
                header("location: ?clt=Add__product");
                exit;
            }
        } else {
            echo "Khong Them Duoc San Pham";
        }
    }

    // Xoa San Pham
    public function Delete__product()
    {
        $product = $_GET['dl'] ?? "";
        $modle = new Product__M;
        $dele = $modle->delete($product);
        if ($dele) {
            $_SESSION['message'] = "Xoa Thanh Cong";
            header("location: ?clt=List__product");
            exit;
        } else {
            $_SESSION['message'] = "Xoa that Bai";
            header("location: ?clt=List__product");
            exit;
        }
    }

    // lay ra san pham dua theo danh muc


    public function Select__product()
    {

        if (isPost()) {
            $danhmuc = $_POST['madm'];
            $masp = $_GET['id'] ?? "";
            $modle = new Product__M;
            $select = $modle->select__danhmuc($danhmuc);
            $bangdanhmuc =  $modle->getAll("danhmuc");
            $bangthuoctinh = $modle->getAll("thuoctinh");
            $bangsanpham = $modle->getAll("sanpham");
            $edit = $modle->getOne($masp);
            $message = $_SESSION['message'] ?? "";
            unset($_SESSION['message']);
            View("Product", "List__product", ['select' => $select, 'message' => $message, 'bangdanhmuc' => $bangdanhmuc, 'bangthuoctinh' => $bangthuoctinh, 'bangsanpham' => $bangsanpham,  'edit' => $edit]);
        }
    }
}
