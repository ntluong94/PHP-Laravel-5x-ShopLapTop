<?php
    $open ="user";
    require_once __DIR__. "/../../autoload/autoload.php";

    $id = intval(getInput('id'));

    $EditUsers = $db->fetchID("users",$id);
    if(empty($EditUsers))
    {
        $_SESSION['error'] = " Dữ liệu ko tồn tại";
        redirectUser("user");
    }

    $num = $db->delete("users",$id);
    if($num > 0)
    {
            $_SESSION['success']= "Xóa thành công";
            redirectUser("user");
    }
    else
    {
         $_SESSION['error']= "Không thể xóa";
            redirectUser("user");
    }
    
?>