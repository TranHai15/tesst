<!-- File dieu huong -->
<?php
session_start();
// Common
require_once('./Count.php');
require_once("Common/Connect.php");
require_once("Common/Function.php");
// Controllers
require_once("Controllers/Layout__C/Trangchu.php");
require_once("Controllers/Product__C/Product.php");
require_once("Controllers/Form__C/Form.php");
require_once("Controllers/Layout__C/Chitiet.php");
require_once("Controllers/Admin__C/Admin.php");
require_once("Controllers/Danhmuc__C/Danhmuc.php");
// Models
require_once("Models/Layout__M/Trangchu.php");
require_once("Models/Product__M/Product.php");
require_once("Models/Form__M/Form.php");
require_once("Models/Layout__M/Chitiet.php");
require_once("Models/Admin__M/Admin.php");
require_once("Models/Danhmuc__M/Danhmuc.php");

$module = "Trangchu";
$ac = $_GET['clt'] ?? $module;

switch ($ac) {
        // Giao Dien Nguoi Dung
    case "Trangchu":
        (new Trangchu__C)->List();
        break;
    case "Nam":
        (new Trangchu__C)->Listnam("Nam");
        break;
    case "Nu":
        (new Trangchu__C)->Listnu("Nam");
        break;
    case "Treem":
        (new Trangchu__C)->List();
        break;

        // Giao dien them san pham admin
    case "List__product":
        (new Procuct__C)->List();
        break;
    case "Add__product":
        (new Procuct__C)->List("Add__product");
        break;
    case "Edit__product":
        (new Procuct__C)->List("Edit__product");
        break;
    case "update":
        (new Procuct__C)->Update__product();
        break;
    case "Add":
        (new Procuct__C)->Add__product();
        break;
    case "Delete":
        (new Procuct__C)->Delete__product();
        break;
    case "Select":
        (new Procuct__C)->Select__product();
        break;
        // Giao dien quan ly danh muc

    case "List__danhmuc":
        (new Danhmuc__C)->List();
        break;
    case "Add__danhmuc":
        (new Danhmuc__C)->List("Add__danhmuc");
        break;
    case "Edit__danhmuc":
        (new Danhmuc__C)->List("Edit__danhmuc");
        break;
    case "add__dm":
        (new Danhmuc__C)->Add__danhmuc();
        break;
    case "Delete__danhmuc":
        (new Danhmuc__C)->Delete__danhmuc();
        break;
    case "edit_dm":
        (new Danhmuc__C)->Update__danhmuc();
        break;









        // Giao dien them nguoi dung
    case "List__admin":
        (new Admin__C)->List();
        break;
    case "Add__admin":
        (new Admin__C)->List("Add__admin");
        break;
    case "Edit__admin":
        (new Admin__C)->List("Edit__admin");
        break;
    case "update__admin":
        (new Admin__C)->Update__product();
        break;
    case "Add__admin":
        (new Admin__C)->Add__product();
        break;
    case "Delete__admin":
        (new Admin__C)->Delete__product();
        break;

        // Giao dien dang nhap
    case "dangnhap":
        (new Form__C)->List();
        break;
    case "dangki":
        (new Form__C)->List("dangki");
        break;
    case "login":
        (new Form__C)->login();
        break;
    case "dangxuat":
        (new Form__C)->dangxuat();
        break;
    case "account":
        (new Form__C)->account();
        break;
    case "load":
        (new Form__C)->List("dangki");
        break;
    case "quenmk":
        (new Form__C)->List("fogort");
        break;
    case "fogot":
        (new Form__C)->fogot();
        break;
    case "datlai":
        (new Form__C)->upodate_password();
        break;

        // Giao dien san pham chi tiet 
    case "chitietsanpham":
        (new Chitiet__C)->chitietsanpham();
        break;

    default:
        (new Trangchu__C)->List();
        break;
}
