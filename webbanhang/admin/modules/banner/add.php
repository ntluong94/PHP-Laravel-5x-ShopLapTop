<?php
$open ="banner";
require_once __DIR__. "/../../autoload/autoload.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $data=[];
    $error = [];

    if(! isset($_FILES['pictures']))
        {
            $error['pictures']="Mời bạn chọn hình ảnh";
        }
_debug($_FILES);
    if(empty($error))
    {
        if(isset($_FILES['pictures']))
        {
            $file_name = $_FILES['pictures']['name'];
            $file_tmp  = $_FILES['pictures']['tmp_name'];
            $file_type  = $_FILES['pictures']['type'];
            $file_error  = $_FILES['pictures']['error'];
        }
        if($file_error==0)
        {
            $part = ROOT ."banner/";
            $data['pictures'] = $file_name;
        }
        $id_insert= $db->insert("banner",$data);
        if($id_insert)
        {
            move_uploaded_file($file_tmp,$part.$file_name);
            $_SESSION['success'] = "Thêm sản phẩm thành công";
            redirectAdmin("banner");
        }
        else
        {
            $_SESSION['error'] = "Thêm sản phẩm thất bại";
        }
    }
}

 ?>

<?php require_once __DIR__."/../../layouts/header.php"; ?>
<!-- Page Heading nội dung-->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Thêm banner
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
                       <li>
                <a href="<?php echo base_url() ?>admin/modules/banner">Banner</a>
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
<form action="" method="post" enctype="multipart/form-data">
<p>Pictures:
<input type="file" name="pictures" />

<input type="submit" value="Send" />
</p>
</form>
</div>
<!-- /.row -->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>