<?php


class Chitiet__M
{
    public $conn = null;

    // Kets Noi Database
    public function __construct()
    {
        $this->conn = Connect();
    }


    public function getOne($masp)
    {
        $sql = "SELECT * FROM sanpham Where masp=:masp";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":masp", $masp);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }


    public function getWhere()
    {
        $sql = "SELECT * FROM sanpham  ORDER BY masp DESC LIMIT 6 ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function luotxem($masp)
    {
        $sql = "SELECT luotxem From sanpham Where masp=:masp";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ":masp" => $masp,
        ]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($data && isset($data['luotxem'])) {
            return (int)$data['luotxem'];
        } else {
            // Nếu không tìm thấy sản phẩm, trả về 0 hoặc giá trị mặc định
            return 0;
        }
    }

    // update luot xem
    public function update__view($masp, $luotxem)
    {

        $a = $luotxem + 1;
        $sql = "UPDATE sanpham SET luotxem=:luotxem  Where masp=:masp ";
        $stmt = $this->conn->prepare($sql);
        return   $stmt->execute([
            ":masp" => $masp,
            ":luotxem" => $a,
        ]);
    }
}
