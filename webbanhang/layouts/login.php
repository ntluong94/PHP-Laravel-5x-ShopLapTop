
    <section class="main-content col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="carousel-heading no-margin">
                        <h4>Đăng nhập</h4>
                    </div>
                <form class="form-horizontal" action="" method="POST" role="form">
                    <div class="page-content">
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
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="iconic-input">
                                    <input type="email" placeholder="Email" name="email">
                                    <i class="icons icon-user-3"></i>
                                     <small id="Help" class="form-text text-muted">
                                        <?php if (isset($error['email'])): ?>
                                            <p class="text-danger"><?php echo $error['email'] ?></p>                
                                        <?php endif ?>  
                                    </small>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="iconic-input">
                                    <input type="password" placeholder="Password" name="password">
                                    <i class="icons icon-lock"></i>
                                    <small id="Help" class="form-text text-muted">
                                        <?php if (isset($error['password'])): ?>
                                            <p class="text-danger"><?php echo $error['password'] ?></p>                
                                        <?php endif ?>  
                                    </small>
                                </div>
                            </div>
                        </div>
                        <br/><br/>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 align-left">
                                <input type="submit" class="orange">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 align-right">
                                <small>
                                <a class="align-right" href="#"></a>
                                <br>
                                </small>
                            </div>
                        </div>
                    </div>
                 </form>
                </div>
            </div>
   </section>
    