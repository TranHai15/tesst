<!-- Product__M -->

<?php
class Product__M
{
    public $conn = null;

    // Kets Noi Database
    public function __construct()
    {
        $this->conn = Connect();
    }

    // lay toan bo du lieu tu mot bang
    public function getAll($table)
    {
        $sql = "SELECT * FROM $table";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getOne($masp)
    {
        $sql = "SELECT * FROM sanpham Where masp=:masp";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":masp", $masp);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function update($tensp, $gt, $mota, $past, $past2, $giagoc, $giamgia, $danhmuc, $thuoctinh, $masp)
    {
        $sql = "UPDATE sanpham
        SET 
            tensp = :tensp,
            gioithieu = :gioithieu,
            mota = :mota,
            hinhanh = :hinhanh,
            hinhanh2=:hinhanh2,
            giagoc = :giagoc,
            giamgia = :giamgia,
            madm = :madm,
            idthuoctinh = :idthuoctinh
        WHERE masp = :masp";
        $stmt = $this->conn->prepare($sql);
        return   $stmt->execute(
            [
                ':tensp' => $tensp,
                ':gioithieu' => $gt,
                ':mota' => $mota,
                ':hinhanh' => $past,
                ':hinhanh2' => $past2,
                ':giagoc' => $giagoc,
                ':giamgia' => $giamgia,
                ':madm' => $danhmuc,
                ':idthuoctinh' => $thuoctinh,
                ':masp' => $masp,
            ]
        );
    }

    public function Add($tensp, $gt, $mota, $past, $past2, $giagoc, $giamgia, $soluong, $danhmuc, $thuoctinh)
    {
        $sql = "INSERT INTO sanpham (tensp, gioithieu, mota, hinhanh,hinhanh2, giagoc, giamgia, soluong, madm, idthuoctinh) 
                VALUES (:tensp, :gioithieu, :mota, :hinhanh,:hinhanh2, :giagoc, :giamgia, :soluong, :madm, :idthuoctinh)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(
            [
                ':tensp' => $tensp,
                ':gioithieu' => $gt,
                ':mota' => $mota,
                ':hinhanh' => $past,
                ':hinhanh2' => $past2,
                ':giagoc' => $giagoc,
                ':giamgia' => $giamgia,
                ':soluong' => $soluong,
                ':madm' => $danhmuc,
                ':idthuoctinh' => $thuoctinh,
            ]
        );
    }

    // xoa san pham
    public function delete($dk)
    {
        $sql = "DELETE FROM sanpham WHERE masp=? ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $dk, PDO::PARAM_INT);
        return  $stmt->execute();
    }

    // Lay ra san pham dua theo danh muc

    public function select__danhmuc($madm)
    {
        $sql = "SELECT * FROM sanpham WHERE madm=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $madm, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }





    //  Ngat Ket Noi Database
    public function __destruct()
    {
        $this->conn = null;
    }
}
