<?php
    $open ="transaction";
    require_once __DIR__. "/../../autoload/autoload.php";

    $id = intval(getInput('id'));

    $DeleteTransaction = $db->fetchID("transaction",$id);
    if(empty($DeleteTransaction))
    {
        $_SESSION['error'] = " Dữ liệu ko tồn tại";
        redirectAdmin("transaction");
    }
   $ordersql="SELECT * FROM orders WHERE transaction_id=$id";
   $orderssql = $db->fetchsql($ordersql);
    foreach ($ordersql as $item) {           
            $num = $db->delete("orders",$item['id']);
        }
        $num = $db->delete("transaction",$id);
        if($num > 0)
        {
                $_SESSION['success']= "Xóa thành công";
                redirectAdmin("transaction");
        }
        else
        {
             $_SESSION['error']= "Không thể xóa";
             redirectAdmin("transaction");
        }

    
?>