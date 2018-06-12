<?php
session_start();
require_once __DIR__. "/../libraries/Database.php";
require_once __DIR__. "/../libraries/Function.php";
$db = new Database;

define("ROOT",$_SERVER['DOCUMENT_ROOT']."/webbanhang/public/uploads/");
$category = $db->fetchAll("category");
$PayProductsql ="SELECT * FROM product WHERE 1 ORDER BY pay DESC LIMIT 4";
$PayProduct =$db->fetchsql($PayProductsql);
/**
 * Lấy danh sách sản phẩm mới
 */
$sqlNew = "SELECT * FROM product WHERE 1 ORDER BY ID DESC  LIMIT 4";
$productNew = $db->fetchsql($sqlNew);

$sqlRandom = "SELECT * FROM product WHERE 1 RANDOM ID DESC  RAND()LIMIT 5";
$productRandom = $db->fetchsql($sqlNew);
 ?>