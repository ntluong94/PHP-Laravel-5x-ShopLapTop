<?php
require_once __DIR__. "/autoload/autoload.php";
    $data=
    [
        "email"=> postInput("email"),
        "password"=> postInput('password')
    ];
    $error = [];

    if($_SERVER["REQUEST_METHOD"]=="POST")
{
     if($data['email']=='')
    {
        $error['email']="Mời bạn nhập email";
    }
        if($data['password']=='')
    {
        $error['password']="Mời bạn nhập mật khẩu";
    }
        //Nếu không có lỗi
    if(empty($error))
    {

        $is_check = $db->fetchOne("users","email='".$data['email']."' AND password ='".md5($data['password'])."' ");
        if($is_check != NULL)
        {
            $_SESSION['name_user'] = $is_check['name'];
            $_SESSION['name_id'] = $is_check['id'];
            echo "<script>alert('Đăng nhập thành công');location.href='index.php'</script>";
        }
        else
        {
            $_SESSION['error'] = "Đăng nhập thất bại";
        }

    } 
}

 ?>

            <!-- Header -->
            <?php require_once __DIR__."/layouts/header.php"; ?>
            <!-- /Header -->
            <!-- Content -->
            <div class="row content">
            <?php require_once __DIR__."/layouts/login.php"; ?>
            <?php require_once __DIR__."/layouts/sidebar.php"; ?>
            </div>
            <!-- /Content -->
            <!-- Footer -->
            <?php require_once __DIR__."/layouts/footer.php"; ?>
            <!-- Footer -->