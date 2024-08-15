<!-- Form M -->
<?php

class Form__M
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = Connect();
    }
    public function demdulieu($dk)
    {
        $sql = "SELECT COUNT(*) from users WHERE phone=:phone";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':phone' => $dk,
        ]);
        $data = $stmt->fetchColumn();
        return $data;
    }
    public function getdata($dk)
    {
        $sql = "SELECT * from users WHERE phone=:phone";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':phone' => $dk,
        ]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public function inser($name, $pass, $phone)
    {
        $sql = "INSERT INTO users(nameuser,password,phone)  VALUES(:nameuser,:password,:phone)";
        $stmt = $this->conn->prepare($sql);
        $data = $stmt->execute([
            ':nameuser' => $name,
            ':password' => $pass,
            ':phone' => $phone,
        ]);
        return $data;
    }


    public function update_password($phone, $pass)
    {
        $sql = "UPDATE users Set password=:password Where phone=:phone";

        $stmt = $this->conn->prepare($sql);
        return    $stmt->execute([
            ':password' => $pass,
            ':phone' => $phone
        ]);
    }
}
