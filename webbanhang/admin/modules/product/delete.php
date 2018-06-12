<?php
    $open ="product";
    require_once __DIR__. "/../../autoload/autoload.php";

    $id = intval(getInput('id'));

    $EditCategory = $db->fetchID("product",$id);
    if(empty($EditCategory))
    {
        $_SESSION['error'] = " Dữ liệu ko tồn tại";
        redirectAdmin("product");
    }
    /**
     * Kiểm tra xem danh mục có sản phẩm thì không thể xóa
     */


    $num = $db->delete("product",$id);
    if($num > 0)
    {
            $_SESSION['success']= "Xóa thành công";
            redirectAdmin("product");
    }
    else
    {
         $_SESSION['error']= "Không thể xóa";
            redirectAdmin("product");
    }
    
?>