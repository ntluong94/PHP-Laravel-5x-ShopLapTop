<?php
$open ="product";
require_once __DIR__. "/../../autoload/autoload.php";

if(isset($_GET['page']))
{
    $p = $_GET['page'];
}
else
{
    $p = 1;
}

$sql = "SELECT * FROM banner WHERE id";

$banner = $db->fetchJone('banner',$sql,$p,2,true);

if(isset($banner['page']))
{
    $sotrang=$banner['page'];
    unset($banner['page']);
}

 ?>

<?php require_once __DIR__."/../../layouts/header.php"; ?>
<!-- Page Heading nội dung-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Quản lý banner
                <small> <a href="add.php" class="btn btn-info">Thêm mới</a></small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> banner
                </li>
            </ol>
            <div class="clearfix"></div>
            <!-- Thông báo lỗi -->
            <?php require_once __DIR__."/../../../partials/notification.php"; ?>       
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">  
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>pictures</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $stt=1; foreach ($banner as $item): ?>
                <tr>
                    <td><?php echo $stt ?></td>
                    <td>
                         <img src="<?php echo upload() ?>banner/<?php echo $item['pictures'] ?>" alt="" width="400px" height="150px">                     
                    </td>
                    <td>
                        <a class="btn btn-xs btn-danger"  href="delete.php?id=<?php echo $item['id'] ?>"><i class="fa fa-trash fa-1"></i> xóa</a>
                    </td>
                </tr>
                 <?php $stt++; endforeach ?>
            </tbody>
        </table>
        <nav aria-label="Page navigation">
    <ul class="pagination pull-right">
        <li>
            <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <?php for($i = 1; $i <= $sotrang ; $i++):?>
        <?php
        if(isset($_GET['page']))
        {
            $p = $_GET['page'];
        }
        else
        {
            $p = 1;
        }
         ?>
         <li class="<?php echo ($i==$p)? 'active' : ''?>">
            <a href="?page=<?php echo $i ;?>"><?php echo $i;?></a>
        </li>
        <?php endfor ?>
        <li>
            <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
    </div>
    </div>
     </div>
<!-- /.row -->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>