<?php
    $open ="category";
    require_once __DIR__. "/../../autoload/autoload.php";

    $id = intval(getInput('id'));

    $EditCategory = $db->fetchID("category",$id);
    if(empty($EditCategory))
    {
        $_SESSION['error'] = " Dữ liệu ko tồn tại";
        redirectAdmin("category");
    }
    /**
     * Kiểm tra xem danh mục có sản phẩm thì không thể xóa
     */
    $is_product = $db->fetchOne("product"," category_id=$id ");
    if($is_product == null)
    {
         $num = $db->delete("category",$id);
        if($num > 0)
        {
                $_SESSION['success']= "Xóa thành công";
                redirectAdmin("category");
        }
        else
        {
             $_SESSION['error']= "Không thể xóa";
             redirectAdmin("category");
        }

    }
    else
    {
        $_SESSION['error']= "Danh mục có sản phẩm bạn không thể xóa";
             redirectAdmin("category");
    }  
?>