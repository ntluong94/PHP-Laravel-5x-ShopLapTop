
    <section class="main-content col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">
        <div class="carousel-heading no-margin">
            <h4>Thanh toán</h4>
        </div>
        <div class="page-content">
           <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p><strong>Shopper information</strong></p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <p>E-Mail*</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <input type="text" value="<?php echo $user['email'] ?>" readonly="true">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <p>Tên người dùng</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <input type="text"  aria-describedby="Help" value="<?php echo $user['name'] ?>" readonly="true">
                </div>
            </div>          
             <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <p>Địa chỉ</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <input type="text"  value="<?php echo $user['address'] ?>" readonly="true">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <p>Số điện thoại</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <input type="number"  value="<?php echo $user['phone'] ?>" readonly="true">
                </div>
            </div>
            <div class="clearfix"> </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <p>Số tiền</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <input type="text" value="₫ <?php echo formatPrice($_SESSION['total']) ?>" readonly="true">
                </div>
            </div>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <p>Ghi chú</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                	<p>vd: Thời gian giao hàng, hoặc có địa chỉ khác</p>
                    <input type="text" name="note" value="" placeholder="">
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- Thông báo lỗi -->
            <?php require_once __DIR__."/../partials/notification.php"; ?>  
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <input class="big" type="submit" value="ĐẶT HÀNG">
                    <input href="index.php" class="big" type="reset" value="Cancel">
                </div>
            </div>
            </form>
        </div>
   </section>
