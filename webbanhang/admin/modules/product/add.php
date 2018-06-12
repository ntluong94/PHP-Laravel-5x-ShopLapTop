<?php
$open ="product";
require_once __DIR__. "/../../autoload/autoload.php";

/**
 * List category
 */
$category = $db->fetchAll("category");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $data=
    [
        "name" => postInput('name'),
        "slug"=> to_slug(postInput("name")),
        "category_id"=> postInput('category_id'),
        "price"=> postInput('price'),
        "sale"=> postInput('sale'),
        "number"=> postInput('number'),
        "content"=> postInput('content')
    ];
    $error = [];
    if(postInput('category_id')=='')
    {
        $error['category_id']="Mời bạn chọn danh mục";
    }
     if(postInput('price')=='')
    {
        $error['price']="Mời bạn nhập giá sản phẩm";
    }
      if(postInput('sale')=='')
    {
        $error['sale']="Mời bạn nhập giá sản phẩm";
    }
     if(postInput('content')=='')
    {
        $error['content']="Mời bạn nhập mô tả";
    }
    if(postInput('number')=='')
    {
        $error['number']="Mời bạn nhập số lượng";
    }
         if(! isset($_FILES['thunbar']))
        {
            $error['thunbar']="Mời bạn chọn hình ảnh";
        }
_debug($_FILES);
        //Nếu không có lỗi
        if(empty($error))
        {
            if(isset($_FILES['thunbar']))
            {
                $file_name = $_FILES['thunbar']['name'];
                $file_tmp  = $_FILES['thunbar']['tmp_name'];
                $file_type  = $_FILES['thunbar']['type'];
                $file_error  = $_FILES['thunbar']['error'];
            }
            if($file_error==0)
            {
                $part = ROOT ."product/";
                $data['thunbar'] = $file_name;
            }
            $id_insert= $db->insert("product",$data);
            if($id_insert)
            {
                move_uploaded_file($file_tmp,$part.$file_name);
                $_SESSION['success'] = "Thêm sản phẩm thành công";
                redirectAdmin("product");
                _debug(move_uploaded_file($file_tmp,$part.$file_name));
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
            Thêm sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
                       <li>
                <a href="<?php echo base_url() ?>admin/modules/product">Sản phẩm</a>
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
    <!--category id-->
    <div class="form-group">
        <label for="exampleInputEmail1" class="col-sm-2 control-label">Danh mục</label>
        <div class="col-sm-8">
            <select class="form-control col-md-8" name="category_id">
                <option value="">Chọn danh mục sản phẩm </option>
                <?php foreach ($category as $item):  ?>
                <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                <?php endforeach ?>
            </select>
            <small id="emailHelp" class="form-text text-muted">
            <?php if (isset($error['category_id'])): ?>
                <p class="text-danger"><?php echo $error['category_id'] ?></p>                
            <?php endif ?>  
         </small>
     </div>
    </div>    
    <!--add name product-->
    <div class="form-group">
        <label for="exampleInputEmail1" class="col-sm-2 control-label">Tên sản phẩm</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp"  placeholder="product name">
         <small id="emailHelp" class="form-text text-muted">
            <?php if (isset($error['name'])): ?>
                <p class="text-danger"><?php echo $error['name'] ?></p>                
            <?php endif ?>  
         </small>
         </div>
    </div>
    <!--add price-->
        <div class="form-group">
        <label for="exampleInputEmail1" class="col-sm-2 control-label">Giá sản phẩm</label>
        <div class="col-sm-4">
        <input type="number" class="form-control" id="exampleInputEmail1" name="price" aria-describedby="emailHelp"  placeholder="8.000.000">
         <small id="emailHelp" class="form-text text-muted">
            <?php if (isset($error['price'])): ?>
                <p class="text-danger"><?php echo $error['price'] ?></p>                
            <?php endif ?>  
         </small>
         </div>
    </div>
        <!--add number-->
        <div class="form-group">
        <label for="exampleInputEmail1" class="col-sm-2 control-label">Số lượng</label>
        <div class="col-sm-4">
        <input type="number" class="form-control" id="exampleInputEmail1" name="number" aria-describedby="emailHelp"  placeholder="100">
         <small id="emailHelp" class="form-text text-muted">
            <?php if (isset($error['number'])): ?>
                <p class="text-danger"><?php echo $error['number'] ?></p>                
            <?php endif ?>  
         </small>
         </div>
    </div>
    <!--add sale-->
    <div class="form-group">
        <label for="exampleInputEmail1" class="col-sm-2 control-label">Giảm giá (%)</label>
        <div class="col-sm-4">
        <input type="number" class="form-control" id="exampleInputEmail1" name="sale" aria-describedby="emailHelp"  placeholder="10" value="0">
         </div>
            <!--images-->
        <label for="exampleInputEmail1" class="col-sm-1 control-label">Hình ảnh</label>
        <div class="col-sm-3">
        <input type="file" class="form-control" id="exampleInputEmail1" name="thunbar" aria-describedby="emailHelp"  placeholder="" value="0">
                 <small id="emailHelp" class="form-text text-muted">
            <?php if (isset($error['thunbar'])): ?>
                <p class="text-danger"><?php echo $error['thunbar'] ?></p>                
            <?php endif ?>  
         </small>
        </div>
    </div>
        <!--add price-->
    <div class="form-group">
        <label for="exampleInputEmail1" class="col-sm-2 control-label">Mô tả</label>
        <div class="col-sm-8">
        <textarea class="form-control" rows="4" id="exampleInputEmail1" name="content" aria-describedby="emailHelp"  placeholder="content"></textarea>
         <small id="emailHelp" class="form-text text-muted">
            <?php if (isset($error['content'])): ?>
                <p class="text-danger"><?php echo $error['content'] ?></p>                
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