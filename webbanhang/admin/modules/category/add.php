<?php
$open ="category";
require_once __DIR__. "/../../autoload/autoload.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $data=
    [
        "name" => postInput('name'),
        "slug"=> to_slug(postInput("name"))
    ];
    $error = [];
    if(postInput('name')=='')
    {
        $error['name']="Mời bạn nhâp đầy đủ tên danh mục";
    }
    //Nếu không có lỗi
    if(empty($error))
    {
        $id_insert = $db->insert("category",$data);
        if($id_insert > 0)
        {
            $_SESSION['success']= "Bạn đã thêm mới thành công";
            redirectAdmin("category");
        }
        else
        {
            $_SESSION['success']= "Lỗi";
        }
    }
}

 ?>

<?php require_once __DIR__."/../../layouts/header.php"; ?>
<!-- Page Heading nội dung-->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Thêm danh mục
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
                       <li>
                <a href="<?php echo base_url() ?>admin/modules/category">Danh mục</a>
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
       <form class="form-horizontal" action="" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1" class="col-sm-2 control-label">Tên danh mục</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp"  placeholder="Enter category">
         <small id="emailHelp" class="form-text text-muted">
            <?php if (isset($error['name'])): ?>
                <p class="text-danger"><?php echo $error['name'] ?></p>                
            <?php endif ?>

             
         </small>
         </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-primary">Save</button>
    </div>
    </div>
</form>
</div>
<!-- /.row -->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>