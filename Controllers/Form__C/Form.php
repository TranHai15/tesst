<?php

class Form__C
{
    public function List($file = "dangnhap")
    {
        $model = new Form__M;
        $message = $_SESSION['message'] ?? "";
        unset($_SESSION['message']);
        View("Form", $file, ['message' => $message,]);
    }

    public function dangxuat()
    {
        if (isGet()) {
            $dangxuat = $_GET['dangxuat'] ?? "";
            unset($_SESSION['admin']);
            unset($_SESSION['user']);
            header("location: ?clt=Trangchu");
        }
    }

    public function login()
    {
        $model = new Form__M;
        $error = [];
        $message = [];
        if (isPost()) {
            $filterAll = filter();
            $_SESSION['filterAll'] = $filterAll;
            $phone = preg_replace('/\s+/', '', $filterAll['phone']);
            $password = preg_replace('/\s+/', '', $filterAll['password']);
            $row = $model->demdulieu($phone);
            if (strlen($phone) > 0) {
                if (strlen($password) > 6) {
                    if ($row > 0) {
                        $data = $model->getdata($phone);
                        if (password_verify($password, $data['password'])) {
                            if ($data['admin'] === 1) {
                                $_SESSION['admin'] = $data['nameuser'];
                                $_SESSION['message'] = "Đăng nhập thành công";
                                header("location: ?clt=Trangchu");
                                exit;
                            } elseif ($data['admin'] === 0) {
                                $_SESSION['user'] = $data['nameuser'];
                                $_SESSION['message'] = "Đăng nhập thành công";
                                header("location: ?clt=Trangchu");
                                exit;
                            }
                        } else {
                            $message['error'] = "Vui lòng kiểm tra lại mật khẩu và số điện thoại";
                            $error['password']['min'] = "Mật khẩu không chính xác";
                        }
                    } else {
                        $message['error'] = "Vui lòng kiểm tra lại mật khẩu và số điện thoại";
                        $error['phone']['min'] = "Số điện thoại không tồn tại";
                    }
                } else {
                    $message['error'] = "Vui lòng kiểm tra lại mật khẩu và số điện thoại";
                    $error['password']['max'] = "Vui lòng nhập mật khẩu lớn hơn 6 ký tự";
                }
            } else {
                $message['error'] = "Vui lòng kiểm tra lại mật khẩu và số điện thoại";
                $error['phone']['max'] = "Vui lòng nhập số điện thoại";
            }
        }
        View("Form", "dangnhap", [
            'error' => $error,
            'filterAll' => $filterAll,
            'message' => $message,
        ]);
    }

    public function account()
    {
        $model = new Form__M;
        $error = [];
        $message = [];
        if (isPost()) {
            $filterAll = filter();
            $name = preg_replace('/\s+/', '', $filterAll['name']);
            $phone = preg_replace('/\s+/', '', $filterAll['phone']);
            $pass = preg_replace('/\s+/', '', $filterAll['password']);

            if (strlen($name) > 0) {
                var_dump($name);
                var_dump($phone);
                var_dump($pass);

                if (strlen($phone) > 0) {
                    if (strlen($pass) > 0) {
                        $check = isPhone($phone);
                        if ($check) {
                            $layphone = $model->demdulieu($phone);
                            if ($layphone > 0) {
                                $error['phone']['max'] = 'Số điện thoại đã tồn tại';
                                $message['message'] = "Vui Long Kiem Tra Lai Thong Tin";
                            } else {
                                $password = password_hash($pass, PASSWORD_DEFAULT);
                                $kq = $model->inser($name, $password, $phone);
                                if ($kq) {
                                    $_SESSION['message'] = "Tạo tài khoản thành công";
                                    header("location: ?clt=dangnhap");
                                    exit;
                                }
                            }
                        } else {
                            $message['message'] = "Vui Long Kiem Tra Lai Thong Tin";
                            $error__phone['phone']['min'] = 'Số điện thoại Khong dung dinh dang';
                        }
                    } else {
                        $message['message'] = "Vui Long Kiem Tra Lai Thong Tin";
                        $error['password']['min'] = 'Mật khẩu không được để trống';
                    }
                } else {
                    $message['message'] = "Vui Long Kiem Tra Lai Thong Tin";
                    $error__phone['phone']['min'] = 'Số điện thoại bắt buộc phải nhập';
                }
            } else {
                $message['message'] = "Vui Long Kiem Tra Lai Thong Tin";
                $error['name']['min'] = "Họ tên bắt buộc phải nhập";
            }
        }

        View("Form", "dangki", [
            'error' => $error,
            'filterAll' => $filterAll,
            'message' => $message,
            'error__phone' => $error__phone,
        ]);
    }

    public function fogot()
    {
        $model = new Form__M;
        if (isPost()) {
            $filterAll = filter();
            $phone = preg_replace('/\s+/', '', $filterAll['phone']);
            $tontai = $model->demdulieu($phone);
            if ($tontai > 0) {
                $data = $model->getdata($phone);
                setdata("phone", $data['phone']);
                View("Form", "matkhau", ["data" => $data]);
            } else {
                $error = "Phone Khong Ton tai vui Long dang ki tai khoan";
                View("Form", "fogort", ["error" => $error]);
            }
        }
    }

    public function upodate_password()
    {
        $model = new Form__M;
        if (isPost()) {
            $filterAll = filter();
            $phone = getdata("phone");
            $password = $filterAll['password'];
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $data = $model->update_password($phone, $pass);
            var_dump($data);
            View("Form", "dangnhap", []);
        }
    }
}
