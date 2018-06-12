<?php
$open ="user";
require_once __DIR__. "/../../autoload/autoload.php";

if(isset($_GET['page']))
{
    $p = $_GET['page'];
}
else
{
    $p = 1;
}

$sql = "SELECT users.* FROM users ORDER BY ID DESC ";
$users = $db->fetchJone('users',$sql,$p,2,true);

if(isset($users['page']))
{
    $sotrang=$users['page'];
    unset($users['page']);
}


 ?>

<?php require_once __DIR__."/../../layouts/header.php"; ?>
<!-- Page Heading nội dung-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Quản lý người dùng
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> người dùng
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
                    <th>Name</th>
                    <th>info</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $stt=1; foreach ($users as $item): ?>
                <tr>
                    <td><?php echo $stt ?></td>
                    <td><?php echo $item['name'] ?></td>
                    <td>
                        <ul>
                            <li>Id: <?php echo $item['id'] ?></li>
                            <li>Email: <?php echo $item['email'] ?></li>
                            <li>Phone: <?php echo $item['phone'] ?></li>
                        </ul>
                    </td>
                    <td><?php echo $item['created_at'] ?></td>
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