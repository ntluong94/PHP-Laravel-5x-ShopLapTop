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
	

$home = $EditCategory['home'] == 0 ? 1 :0;


   $id_update = $db->update("category",array("home"=>$home), array("id" =>$id));
        if($id_update > 0)
        {
            $_SESSION['success']= "Cập nhập thành công";
            redirectAdmin("category");
        }
        else
        {
            $_SESSION['error']= "Dữ liệu không cập nhật";
            redirectAdmin("category");
        }
?>