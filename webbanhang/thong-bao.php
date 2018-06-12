<?php
require_once __DIR__. "/autoload/autoload.php";
unset($_SESSION['cart']);
unset($_SESSION['tongtien']);
 ?>
            <!-- Header -->
            <?php require_once __DIR__."/layouts/header.php"; ?>
            <!-- /Header -->
            <!-- Content -->
            <div class="row content">
                <section class="main-content col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">
                  <p>
                        <?php if (isset($_SESSION['SUCCESS'])): ?>
                            <div class="sidebar-box-heading" style="background:#2ecc71;">
                                <strong style="color:#3c763d">Success!</strong> <?php echo $_SESSION['SUCCESS'] ;unset($_SESSION['SUCCESS']) ?>
                            </div>
                        <?php endif ?>
                  </p>
                </section>
            <?php require_once __DIR__."/layouts/sidebar.php"; ?>
            </div>
            <!-- /Content -->
            <!-- Footer -->
            <?php require_once __DIR__."/layouts/footer.php"; ?>
            <!-- Footer -->}
}
