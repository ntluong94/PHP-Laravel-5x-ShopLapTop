<?php
require_once __DIR__. "/autoload/autoload.php";

$user = $db->fetchID("users",intval($_SESSION['name_id']));

if($_SERVER["REQUEST_METHOD"]=="POST")
{
      $data = 
      [
            'amount' => $_SESSION['total'],
            'users_id' => $_SESSION['name_id'],
            'note' => postInput("note")
      ];
      $idtran = $db ->insert("transaction",$data);
      if($idtran >0)
      {
            foreach($_SESSION['cart'] as $key => $value)
            {
                  $data2 = 
                  [
                        'transaction_id'=> $idtran,
                        'product_id' => $key,
                        'qty' => $value['qty'],
                        'price' => $value['price']
                  ];
                  $id_insert = $db->insert("orders",$data2);
            }
            $_SESSION['SUCCESS']="Lưu đơn hàng thành công chúng tôi sẽ liên hệ bạn sớm nhất !";
            header("location: thong-bao.php");
      }
}

 ?>
            <!-- Header -->
            <?php require_once __DIR__."/layouts/header.php"; ?>
            <!-- /Header -->
            <!-- Content -->
            <div class="row content">
            <?php require_once __DIR__."/layouts/payment.php"; ?>
            <?php require_once __DIR__."/layouts/sidebar.php"; ?>
            </div>
            <!-- /Content -->
            <!-- Footer -->
            <?php require_once __DIR__."/layouts/footer.php"; ?>
            <!-- Footer -->}
}
