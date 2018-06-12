
    <section class="main-content col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">
        <div class="carousel-heading no-margin">
            <h4>Đăng ký</h4>
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
                    <input type="text" name="email">
                     <small id="Help" class="form-text text-muted">
                        <?php if (isset($error['email'])): ?>
                            <p class="text-danger"><?php echo $error['email'] ?></p>                
                        <?php endif ?>  
                    </small>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <p>Tên người dùng</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <input type="text" name="name" aria-describedby="Help">
                    <small id="Help" class="form-text text-muted">
                        <?php if (isset($error['name'])): ?>
                            <p class="text-danger"><?php echo $error['name'] ?></p>                
                        <?php endif ?>  
                    </small>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <p>Mật khẩu</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <input type="password" name="password" >
                    <small id="Help" class="form-text text-muted">
                        <?php if (isset($error['password'])): ?>
                            <p class="text-danger"><?php echo $error['password'] ?></p>                
                        <?php endif ?>  
                    </small>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <p>Xác nhận mật khẩu</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <input type="password" name="re_password">
                     <small id="Help" class="form-text text-muted">
                        <?php if (isset($error['password'])): ?>
                            <p class="text-danger"><?php echo $error['password'] ?></p>                
                        <?php endif ?>  
                    </small>
                </div>
            </div>            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <p>Địa chỉ</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <input type="text" name="address">
                    <small id="Help" class="form-text text-muted">
                        <?php if (isset($error['address'])): ?>
                            <p class="text-danger"><?php echo $error['address'] ?></p>                
                        <?php endif ?>  
                    </small>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <p>Số điện thoại</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <input type="number" name="phone">
                    <small id="Help" class="form-text text-muted">
                        <?php if (isset($error['phone'])): ?>
                            <p class="text-danger"><?php echo $error['phone'] ?></p>                
                        <?php endif ?>  
                    </small> 
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- Thông báo lỗi -->
            <?php require_once __DIR__."/../partials/notification.php"; ?>  
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <input class="big" type="submit" value="Register">
                    <input class="big" type="reset" value="Cancel">
                </div>
            </div>
            </form>
        </div>
   </section>
    