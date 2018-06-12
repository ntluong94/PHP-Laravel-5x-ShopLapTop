<?php
require_once __DIR__. "/autoload/autoload.php";
$key = intval(getInput('key'));

unset($_SESSION['cart'][$key]);

echo "<script>alert('Đã xóa thành công !!!');location.href='gio-hang.php'</script>";

 ?>