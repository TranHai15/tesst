<!-- Ket Noi Database -->
<?php
function Connect()
{
    try {
        $conn =  new PDO("mysql:host=" . _HOST . "; dbname=" . _DB . "; port=" . _PORT . "; charset=utf8;", _USER, _PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $th) {
        echo "Ket NOi That Bai <br>";
        $th->getMessage();
        die;
    }
}

function View($action, $view, $data = [])
{
    extract($data);
    require_once "./Views/$action/$view.php";
}
