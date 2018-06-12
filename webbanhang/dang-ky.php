<?php
require_once __DIR__. "/autoload/autoload.php";
if(isset($_SESSION['name_id']))
{
    echo "<script>alert('Bạn đã đăng nhập');location.href='index.php'</script>";
}
/**
 * List category
 */
    $data=
    [
        "name" => postInput('name'),
        "email"=> postInput("email"),
        "phone"=> postInput('phone'),
        "address"=> postInput('address'),
        "password"=> MD5(postInput('password'))
    ];
if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $error = [];
    if(postInput('name')=='')
    {
        $error['name']="Mời bạn nhập đầy đủ tên";
    }
    if(postInput('email')=='')
    {
        $error['email']="Mời bạn nhập email";
    }
    else
    {
        $is_check = $db->fetchOne("users","email = '".$data['email']."'");
        if($is_check != null)
        {
            $error['email']="Email đã tồn tại";
        }
    }
     if(postInput('phone')=='')
    {
        $error['phone']="Mời bạn số điện thoại";
    }
      if(postInput('address')=='')
    {
        $error['address']="Mời bạn địa chỉ";
    }
    if(postInput('password')=='')
    {
        $error['password']="Mời bạn nhập mật khẩu";
    }
    if($data['password'] != MD5(postInput("re_password")))
    {
        $error['password'] = " Nhập lại không đúng";
    }
    //Nếu không có lỗi
    if(empty($error))
    {

        $id_insert= $db->insert("users",$data);
        if($id_insert)
        {
            $_SESSION['success'] = "Đăng ký thành công ! mời bạn đăng nhập !!!";
            redirectUsers("dang-ky.php");
        }
        else
        {
            $_SESSION['error'] = "Đăng ký thất bại";
        }
    }
}

 ?>

            <!-- Header -->
            <?php require_once __DIR__."/layouts/header.php"; ?>
            <!-- /Header -->
            <!-- Content -->
            <div class="row content">
            <?php require_once __DIR__."/layouts/register.php"; ?>
            <?php require_once __DIR__."/layouts/sidebar.php"; ?>
            </div>
            <!-- /Content -->
            <!-- Footer -->
            <?php require_once __DIR__."/layouts/footer.php"; ?>
            <!-- Footer -->