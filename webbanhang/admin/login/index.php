<?php
session_start();
require_once __DIR__. "/../../libraries/Database.php";
require_once __DIR__. "/../../libraries/Function.php";
$db = new Database;
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

        $is_check = $db->fetchOne("admin","email='".$data['email']."' AND password ='".md5($data['password'])."' ");
        if($is_check != NULL)
        {
            $_SESSION['admin_name'] = $is_check['name'];
            $_SESSION['admin_id'] = $is_check['id'];
            echo "<script>alert('Đăng nhập thành công');location.href='/webbanhang/admin'</script>";
        }
        else
        {
            $_SESSION['error'] = "Đăng nhập thất bại";
        }

    } 
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/webbanhang/public/admin/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/webbanhang/public/admin/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/webbanhang/public/admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/webbanhang/public/admin/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/webbanhang/public/admin/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/webbanhang/public/admin/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/webbanhang/public/admin/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/webbanhang/public/admin/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/webbanhang/public/admin/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/webbanhang/public/admin/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="/webbanhang/public/admin/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" action="" method="POST" role="form">
					<span class="login100-form-title p-b-33">
						Account Login
					</span>
                        <p>
                           <?php if (isset($_SESSION['SUCCESS'])): ?>
                            <div class="alert-success">
                                <strong style="color:#3c763d">Success!</strong> <?php echo $_SESSION['success'] ;unset($_SESSION['success']) ?>
                            </div>
                        <?php endif ?>
                         <?php if (isset($_SESSION['error'])): ?>
                            <div class="alert-danger">
                                <strong style="color:#a94442">error!</strong> <?php echo $_SESSION['error'] ;unset($_SESSION['error']) ?>
                            </div>
                        <?php endif ?>
                        </p>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
		            <small id="Help" class="form-text text-muted">
                        <?php if (isset($error['email'])): ?>
                            <p class="text-danger"><?php echo $error['email'] ?></p>                
                        <?php endif ?>  
                    </small>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
		             <small id="Help" class="form-text text-muted">
                        <?php if (isset($error['password'])): ?>
                            <p class="text-danger"><?php echo $error['password'] ?></p>                
                        <?php endif ?>  
                    </small>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="/webbanhang/public/admin/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/webbanhang/public/admin/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/webbanhang/public/admin/login/vendor/bootstrap/js/popper.js"></script>
	<script src="/webbanhang/public/admin/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/webbanhang/public/admin/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/webbanhang/public/admin/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="/webbanhang/public/admin/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/webbanhang/public/admin/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/webbanhang/public/admin/login/js/main.js"></script>

</body>
</html>