<!-- Product__M -->

<?php
class Admin__M
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

    public function getOne($mauser)
    {
        $sql = "SELECT * FROM users Where mauser=:mauser";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":mauser", $mauser);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function update($tenuser, $password, $phone, $mauser)
    {
        $sql = "UPDATE users
        SET 
            nameuser = :nameuser,
            password = :password,
            phone = :phone,
        WHERE mauser = :mauser";
        $stmt = $this->conn->prepare($sql);
        return   $stmt->execute(
            [
                ':nameuser' => $tenuser,
                ':password' => $password,
                ':phone' => $phone,
                ':mauser' => $mauser,
            ]
        );
    }

    public function Add($nameuser, $password, $phone)
    {
        $sql = "INSERT INTO users (nameuser, password, phone) 
                VALUES (:nameuser, :password, :phone)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(
            [
                ':nameuser' => $nameuser,
                ':password' => $password,
                ':phone' => $phone,
            ]
        );
    }

    // xoa san pham
    public function delete($dk)
    {
        $sql = "DELETE FROM users WHERE mauser=? ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $dk, PDO::PARAM_INT);
        return  $stmt->execute();
    }

    // Lay ra san pham dua theo danh muc



    //  Ngat Ket Noi Database
    public function __destruct()
    {
        $this->conn = null;
    }
}
