<!-- TrangChu__M -->

<?php
class Trangchu__M
{
    public $conn = null;

    // Kets Noi Database
    public function __construct()
    {
        $this->conn = Connect();
    }

    // lay toan bo du lieu tu mot bang
    public function getAll()
    {
        $sql = "SELECT * FROM sanpham";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    // lay san pham theo thuoctinh


    public function select__thuoctinh($matt)
    {
        $sql = "SELECT * FROM sanpham WHERE idthuoctinh=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $matt, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    public function get_nu()
    {

        $sql = "SELECT * FROM sanpham WHERE tensp Like '%Nữ%' OR tensp LIKE '%nữ%' ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function get_nam()
    {

        $sql = "SELECT * FROM sanpham WHERE tensp Like '%Nam%' OR tensp LIKE '%nam%' ";
        $stmt = $this->conn->prepare($sql);
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
