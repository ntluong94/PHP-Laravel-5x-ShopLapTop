<?php
require_once __DIR__. "/autoload/autoload.php";

if($_SESSION['cart']==null)
{
echo "<script>alert('Chưa có sản phẩm nào trong giỏ hàng');location.href='index.php'</script>";
}
else
{
    $_SESSION['cart'];
}
$sum=0;
 ?>
            <!-- Header -->
            <?php require_once __DIR__."/layouts/header.php"; ?>
            <!-- /Header -->
            <!-- Content -->
            <div class="row content">
            <?php require_once __DIR__."/layouts/cart.php"; ?>
            <?php require_once __DIR__."/layouts/sidebar.php"; ?>
            </div>
            <!-- /Content -->
            <!-- Footer -->
            <?php require_once __DIR__."/layouts/footer.php"; ?>
            <!-- Footer -->

