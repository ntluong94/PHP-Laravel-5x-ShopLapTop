<?php

$open ="transaction";
require_once __DIR__. "/../../autoload/autoload.php";

$id = intval(getInput('id'));

$UpdateTransaction = $db->fetchID("transaction",$id);
if(empty($UpdateTransaction))
{
    $_SESSION['error'] = " Dữ liệu ko tồn tại";
    redirectAdmin("transaction");
}
if($UpdateTransaction['status']==1)
{
    $_SESSION['error'] = " Giao dịch đã được xử lý";
    redirectAdmin("transaction");
}
    

$status = $UpdateTransaction['status'] == 0 ? 1 :0;


   $id_update = $db->update("transaction",array("status"=>$status), array("id" =>$id));
        if($id_update > 0)
        {
            $_SESSION['success']= "Cập nhập thành công";

            $sql = "SELECT product_id,qty FROM orders WHERE transaction_id=$id";
            $Order = $db->fetchsql($sql);
            foreach ($Order as $item) {
                $idproduct = intval($item['product_id']);
                $product = $db->fetchID("product",$idproduct);
                $number = $product['number'] - $item['qty'];
                $up_pro =$db->update("product",array("number"=>$number,"pay"=>$product['pay']+1),array("id"=>$idproduct));
                    }
            redirectAdmin("transaction");
        }
        else
        {
            $_SESSION['error']= "Dữ liệu không cập nhật";
            redirectAdmin("transaction");
        }
?>