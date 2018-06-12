<?php
$open ="admin";
require_once __DIR__. "/../../autoload/autoload.php";

/**
 * List category
 */
    $data=
    [
        "name" => postInput('name'),
        "level"=> postInput("level"),
        "email"=> postInput('email'),
        "phone"=> postInput('phone'),
        "address"=> postInput('address'),
        "password"=> MD5(postInput('password'))
    ];
if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $error = [];
    if(postInput('name')=='')
    {
        $error['name']="Mời bạn nhập đầy đủ tên admin";
    }
    if(postInput('email')=='')
    {
        $error['email']="Mời bạn nhập email";
    }
    else
    {
        $is_check = $db->fetchOne("admin","email = '".$data['email']."'");
        if($is_check != null)
        {
            $error['email']="Email đã tồn tại";
        }
    }
     if(postInput('phone')=='')
    {
        $error['phone']="Mời bạn số điện thoại admin";
    }
      if(postInput('address')=='')
    {
        $error['address']="Mời bạn địa chỉ admin";
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

        $id_insert= $db->insert("admin",$data);
        if($id_insert)
        {
            $_SESSION['success'] = "Thêm admin thành công";
            redirectAdmin("admin");
        }
        else
        {
            $_SESSION['error'] = "Thêm admin thất bại";
        }
    }
}

 ?>

<?php require_once __DIR__."/../../layouts/header.php"; ?>
<!-- Page Heading nội dung-->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Thêm admin
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
                       <li>
                <a href="<?php echo base_url() ?>admin/modules/admin">admin</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Thêm mới
            </li>
        </ol>
                  <div class="clearfix"></div>
            <!-- Thông báo lỗi -->
            <?php require_once __DIR__."/../../../partials/notification.php"; ?>       
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
       <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <!--Level-->
        <div class="form-group">
        <label for="exampleInputEmail1" class="col-sm-2 control-label">Level</label>
        <div class="col-sm-8">
        <select class="form-control" name="level">
            <option value="1" <?php echo isset($data['level']) && $data['level']==1 ? "selected = 'selected'" : '' ?>>CTV</option>
            <option value="2" <?php echo isset($data['level']) && $data['level']==2 ? "selected = 'selected'" : '' ?>>Admin</option>    
        </select>
            <?php if (isset($error['level'])): ?>
                <p class="text-danger"><?php echo $error['level'] ?></p>                
            <?php endif ?>  
         </small>
         </div>
    </div> 
    <!--add name-->
    <div class="form-group">
        <label for="exampleInputEmail1" class="col-sm-2 control-label">Tên admin</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp"  placeholder="admin name" value="<?php echo $data['name'] ?>">
         <small id="emailHelp" class="form-text text-muted">
            <?php if (isset($error['name'])): ?>
                <p class="text-danger"><?php echo $error['name'] ?></p>                
            <?php endif ?>  
         </small>
         </div>
    </div>
    <!--add email-->
        <div class="form-group">
        <label for="exampleInputEmail1" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-8">
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"  placeholder="xxxxx@gmail.com" value="<?php echo $data['email'] ?>">
         <small id="emailHelp" class="form-text text-muted">
            <?php if (isset($error['email'])): ?>
                <p class="text-danger"><?php echo $error['email'] ?></p>                
            <?php endif ?>  
         </small>
         </div>
    </div>
        <!--add phone-->
        <div class="form-group">
        <label for="exampleInputEmail1" class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-8">
        <input type="number" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp"  placeholder="+84xxxxxx" value="<?php echo $data['phone'] ?>">
         <small id="emailHelp" class="form-text text-muted">
            <?php if (isset($error['phone'])): ?>
                <p class="text-danger"><?php echo $error['phone'] ?></p>                
            <?php endif ?>  
         </small>
         </div>
    </div>
         <!--address-->
        <div class="form-group">
        <label for="exampleInputEmail1" class="col-sm-2 control-label">Địa chỉ</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="exampleInputEmail1" name="address" aria-describedby="emailHelp"  placeholder="address" value="<?php echo $data['address'] ?>">
         <small id="emailHelp" class="form-text text-muted">
            <?php if (isset($error['address'])): ?>
                <p class="text-danger"><?php echo $error['address'] ?></p>                
            <?php endif ?>  
         </small>
         </div>
        </div>
        <!--add password-->
        <div class="form-group">
        <label for="exampleInputEmail1" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-8">
        <input type="password" class="form-control" id="exampleInputEmail1" name="password" aria-describedby="emailHelp"  placeholder="******">
         <small id="emailHelp" class="form-text text-muted">
            <?php if (isset($error['password'])): ?>
                <p class="text-danger"><?php echo $error['password'] ?></p>                
            <?php endif ?>  
         </small>
         </div>
        </div>
         <!--re_password-->
        <div class="form-group">
        <label for="exampleInputEmail1" class="col-sm-2 control-label">ConfigPassword</label>
        <div class="col-sm-8">
        <input type="password" class="form-control" id="exampleInputEmail1" name="re_password" aria-describedby="emailHelp"  placeholder="******">
         <small id="emailHelp" class="form-text text-muted">
            <?php if (isset($error['re_password'])): ?>
                <p class="text-danger"><?php echo $error['re_password'] ?></p>                
            <?php endif ?>  
         </small>
         </div>
    </div>
    <!--Buttom post-->
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-primary">Save</button>
    </div>
    </div>

</form>
</div>
<!-- /.row -->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>