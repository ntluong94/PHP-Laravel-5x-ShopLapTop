<?php
    $open ="admin";
    require_once __DIR__. "/../../autoload/autoload.php";

    $id = intval(getInput('id'));

    $EditAdmin = $db->fetchID("admin",$id);
    if(empty($EditAdmin))
    {
        $_SESSION['error'] = " Dữ liệu ko tồn tại";
        redirectAdmin("admin");
    }
    /**
     * Kiểm tra xem danh mục có sản phẩm thì không thể xóa
     */


    $num = $db->delete("admin",$id);
    if($num > 0)
    {
            $_SESSION['success']= "Xóa thành công";
            redirectAdmin("admin");
    }
    else
    {
         $_SESSION['error']= "Không thể xóa";
            redirectAdmin("admin");
    }
    
?>