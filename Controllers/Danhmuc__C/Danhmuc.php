<!-- Product__C -->
<!-- TrangChu__C -->

<?php
class Danhmuc__C
{
    // Dieu Huong 
    public function List($file = "List__danhmuc")
    {
        $modle = new Danhmuc__M;
        $mauser = $_GET['madm'] ?? "";
        $data_danhmuc = $modle->getdata();
        $edit = $modle->getOne($mauser);
        $message = $_SESSION['message'] ?? "";
        unset($_SESSION['message']);
        View("Danhmuc", $file, ['data_danhmuc' => $data_danhmuc, 'edit' => $edit]);
    }

    // Sua Doi Du Lieu
    public function Update__danhmuc()
    {

        $modle = new Danhmuc__M;
        if (isset($_POST['submit'])) {
            $madm = $_POST['madm'];
            $tendm = $_POST['tendm'];
            $past = $_POST['past'];
        }
        $up = $modle->sua_danhmuc($madm, $tendm, $past);

        if ($up) {
            $_SESSION['message'] = "Sua Doi Thanh Cong";
            header("location: ?clt=List__danhmuc");
            exit;
        } else {
            $_SESSION['message'] = "Sua Doi That Bai";
            header("location: ?clt=Edit__danhmuc");
            exit;
        }
    }

    // Them Du Lieu
    public function Add__danhmuc()
    {
        $modle = new Danhmuc__M;
        if (isset($_POST['submit'])) {
            $tendm = $_POST['tendm'];
            $past = $_POST['past'];
            $data = $modle->them_danhmuc($tendm, $past);
            if ($data) {
                $_SESSION['message'] = "Them Thanh Cong";
                header("location: ?clt=List__danhmuc");
                exit;
            } else {
                $_SESSION['message'] = "Them That Bai";
                header("location: ?clt=Edit__danhmuc");
                exit;
            }
        } else {
            echo " Khong Tim Duoc User Can Sua";
        }
    }

    // Xoa San Pham
    public function Delete__danhmuc()
    {
        $modle = new Danhmuc__M;
        $product = $_GET['madm'] ?? "";

        $dele = $modle->delete_dm($product);
        if ($dele) {
            $_SESSION['message'] = "Xoa Thanh Cong";
            header("location: ?clt=List__danhmuc");
            exit;
        } else {
            $_SESSION['message'] = "Xoa that Bai";
            header("location: ?clt=List__danhmuc");
            exit;
        }
    }
}
