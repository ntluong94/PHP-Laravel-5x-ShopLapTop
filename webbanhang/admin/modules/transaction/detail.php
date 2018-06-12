<?php
$open ="transaction";
require_once __DIR__. "/../../autoload/autoload.php";

$id = intval(getInput('id'));
$sql="SELECT * FROM orders WHERE transaction_id=$id";
$sqluser="SELECT users.*,transaction.* from users,transaction where transaction.id=$id and transaction.users_id=users.id";
$user = $db->fetchsql($sqluser);
$order = $db->fetchsql($sql);
        if($user < 0)
        {
	
             $_SESSION['error']= "Lỗi dữ liệu khách hàng";
             redirectAdmin("transaction");
        }

        if($order < 0)
        {
	
             $_SESSION['error']= "Đơn hàng rỗng";
             redirectAdmin("transaction");
        }

 ?>
<?php require_once __DIR__."/../../layouts/header.php"; ?>
<!-- Page Heading nội dung-->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Chi tiết đơn hàng
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
                       <li>
                <a href="<?php echo base_url() ?>admin/modules/transaction">Đơn hàng</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> chi tiết đơn hàng
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
        <div class="box-content">
        	<?php foreach($user as $item): ?>    		
		        <h2>Tên khách hàng: <?php echo $item['name']?></h2>
		        <h2>Địa chỉ: <?php echo $item['address']?></h2>
		        <h2>Số điện thoại: <?php echo $item['phone']?></h2>
		        <h2 style="color:red">Tổng giá trị đơn hàng:₫ <?php echo formatPrice($item['amount'])?> (bao gồm thuế VAT)</h2>
			<?php endforeach ?>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                    	<th>Stt</th>
                        <th>Mã Sản Phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá(VNĐ/cái)</th>
                        <th>Tổng tiền(VNĐ)</th>
                    </tr>
                </thead> 
                <tbody>

                        <?php $stt=1; foreach($order as $item): ?>
                            <tr>
                            	<td><?php echo $stt ?></td>
                                <td><?php echo $item['product_id']?></td>
                                <td><?php echo $item['qty'] ?></td>
                                <td>₫ <?php echo formatPrice($item['price'])?></td>
                                <td>₫ <?php echo formatPrice($item['price']*$item['qty'])?></td> 
                            </tr>
                         <?php $stt++; endforeach ?>                                       	
                </tbody>
            </table>
        </div>
</div>
<!-- /.row -->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>



