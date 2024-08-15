<!-- Form M -->
<?php

class Danhmuc__M
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = Connect();
    }

    public function getOne($madm)
    {
        $sql = "SELECT * FROM danhmuc Where madm=:madm";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":madm", $madm);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }





    public function getdata()
    {
        $sql = "SELECT * from danhmuc";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }



    public function them_danhmuc($tendm, $past)
    {
        $sql = "INSERT INTO danhmuc ( tendm, past) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $tendm, PDO::PARAM_STR);
        $stmt->bindParam(2, $past, PDO::PARAM_STR);
        return $stmt->execute();
    }


    public function sua_danhmuc($madm, $tendm, $past)
    {
        $sql = "UPDATE danhmuc SET tendm=?, past=? WHERE madm=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $tendm);
        $stmt->bindParam(2, $past);
        $stmt->bindParam(3, $madm);
        return $stmt->execute();
    }


    public function delete_dm($madm)
    {
        $sql = "DELETE FROM danhmuc WHERE madm=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $madm);
        return $stmt->execute();
    }
}
