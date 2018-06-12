<?php
    $open ="banner";
    require_once __DIR__. "/../../autoload/autoload.php";

    $id = intval(getInput('id'));

    $EditCategory = $db->fetchID("banner",$id);
    if(empty($EditCategory))
    {
        $_SESSION['error'] = " Dữ liệu ko tồn tại";
        redirectAdmin("banner");
    }
    $is_product = $db->fetchOne("banner"," id=$id ");
         $num = $db->delete("banner",$id);
        if($num > 0)
        {
                $_SESSION['success']= "Xóa thành công";
                redirectAdmin("banner");
        }
        else
        {
             $_SESSION['error']= "Không thể xóa";
             redirectAdmin("banner");
        }

    
    ?>