<?php

class Chitiet__C
{
    public function List($file = "List__product")
    {
        $modle = new Chitiet__M;
        $masp = $_GET['id'] ?? "";
        $edit = $modle->getOne($masp);
        // $edit = $_GET['al'] ?  $bangsanpham : $editone;
        $message = $_SESSION['message'] ?? "";
        unset($_SESSION['message']);
        View("Layout", $file, ['message' => $message,  'edit' => $edit]);
    }
    public function chitietsanpham()
    {
        $modle = new Chitiet__M;
        $masp = $_GET['id'] ?? "";
        $datasanphamchitiet = $modle->getOne($masp);
        $danhriengchoban = $modle->getWhere();
        $datagoiy = $modle->getWhere();
        $b = $modle->luotxem($masp);
        $a = $modle->update__view($masp, $b);
        // if ($a) {
        //     echo "thanh cong";
        //     die;
        // } else {
        //     echo " that bai";
        // }
        // $datasanphamchitiet = $_GET['al'] ?  $bangsanpham : $editone;
        $message = $_SESSION['message'] ?? "";
        unset($_SESSION['message']);
        View("Layout", 'Chitiet', ['message' => $message,  'datasanphamchitiet' => $datasanphamchitiet,  'danhriengchoban' => $danhriengchoban,  'datagoiy' => $datagoiy]);
    }
}
