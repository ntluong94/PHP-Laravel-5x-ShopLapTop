<?php
require_once __DIR__. "/autoload/autoload.php";

//unset($_SESSION['cart']);
$sqlHomecate ="SELECT name, id FROM category WHERE home = 1 ORDER BY updated_at";
$CategoryHome= $db ->fetchsql($sqlHomecate);


$sql = "SELECT * FROM banner WHERE id";


$banner = $db->fetchAll("banner");
$data =[];
 foreach ($CategoryHome as $item) {
     $cateId = intval($item['id']);
     $sql = "SELECT * FROM product WHERE category_id = $cateId";
     $ProductHome = $db ->fetchsql($sql);
     $data[$item['name']] = $ProductHome;
 }
 $path = $_SERVER['SCRIPT_NAME'];
 ?>
            <!-- Header -->
            <?php require_once __DIR__."/layouts/header.php"; ?>
            <!-- /Header -->
            <!-- Content -->
            <div class="row content">
            <?php require_once __DIR__."/layouts/content.php"; ?>
            <?php require_once __DIR__."/layouts/sidebar.php"; ?>
            </div>
            <!-- /Content -->
            <!-- Footer -->
            <?php require_once __DIR__."/layouts/footer.php"; ?>
            <!-- Footer -->