<!-- Product__C -->
<!-- TrangChu__C -->

<?php
class Admin__C
{
    // Dieu Huong 
    public function List($file = "List__Admin")
    {
        $modle = new Admin__M;
        $mauser = $_GET['id'] ?? "";
        $banguser = $modle->getAll("users");
        $edit = $modle->getOne($mauser);
        $message = $_SESSION['message'] ?? "";
        unset($_SESSION['message']);
        View("Admin", $file, ['message' => $message, 'banguser' => $banguser,  'edit' => $edit]);
    }

    // Sua Doi Du Lieu
    public function Update__product()
    {
        if (isPost()) {
            $data = $_POST;
            $mauser = $data['mauser'];
            $nameuser = $data['nameuser'];
            $password = $data['password'];
            $phone = $data['phone'];
            $modle = new Admin__M;
            $up = $modle->update($nameuser, $password, $phone,  $mauser);

            if ($up) {
                $_SESSION['message'] = "Sua Doi Thanh Cong";
                header("location: ?clt=List__admin");
                exit;
            } else {
                $_SESSION['message'] = "Sua Doi That Bai";
                header("location: ?clt=Edit__admin");
                exit;
            }
        } else {
            echo " Khong Tim Duoc User Can Sua";
        }
    }

    // Them Du Lieu
    public function Add__product()
    {
        if (isPost()) {
            $data = $_POST;
            $nameuser = $data['nameuser'];
            $password = $data['password'];
            $phone = $data['phone'];
            $modle = new Admin__M;
            $add = $modle->Add($nameuser, $password, $phone);

            if ($add) {
                $_SESSION['message'] = "Them Thanh Cong";
                header("location: ?clt=List__admin");
                exit;
            } else {
                $_SESSION['message'] = "Them that Bai";
                header("location: ?clt=Add__admin");
                exit;
            }
        } else {
            echo "Khong Them Duoc User";
        }
    }

    // Xoa San Pham
    public function Delete__product()
    {
        $product = $_GET['dl'] ?? "";
        $modle = new Admin__M;
        $dele = $modle->delete($product);
        if ($dele) {
            $_SESSION['message'] = "Xoa Thanh Cong";
            header("location: ?clt=List__admin");
            exit;
        } else {
            $_SESSION['message'] = "Xoa that Bai";
            header("location: ?clt=List__admin");
            exit;
        }
    }
}
