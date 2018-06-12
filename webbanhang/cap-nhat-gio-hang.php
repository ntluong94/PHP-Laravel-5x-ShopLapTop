<?php
require_once __DIR__. "/autoload/autoload.php";
// id cua san pham
$key = intval(getInput('key'));
$qty = intval(getInput('qty'));

$_SESSION['cart'][$key]['qty'] = $qty;

	echo 1;
	// kiem tra xem so luong nguoi dung mua co lon hon so luong cua san pham trong CSDL
 ?>