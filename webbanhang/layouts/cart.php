 <section class="main-content col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">
 	<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="carousel-heading">
            <h4>Shopping Cart</h4>
        <?php if (isset($_SESSION['SUCCESS'])): ?>
            <div class="alert-success">
                <strong style="color:#3c763d">Success!</strong> <?php echo $_SESSION['success'] ;unset($_SESSION['success']) ?>
            </div>
        <?php endif ?>
        </div>
        <table class="shopping-table">
            <tr>
            	<th>STT</th>
                <th colspan="2">Sản phẩm</th>
                <th>Giá</th>                
                <th colspan="3">Thao tác</th>
                <th>Tổng tiền</th>
            </tr>
            <tbody id="tbody">
            <?php $stt = 1; foreach($_SESSION['cart'] as $key=> $value): ?>
            <tr>
            	 <td>
                    <p><a href="#"><?php echo $stt ?></a></p>
                </td>
                <td class="image-column"><a href="#"><img src="<?php echo upload() ?>product/<?php echo $value['thunbar'] ?>" alt="Product1" width="69px" height="69px"></a></td>
                <td>
                    <p><a href="#"><?php echo $value['name'] ?></a></p>
                </td>
                <td>
                    <p><?php echo $value['price'] ?></p>
                </td>             
                <td class="quantity">
                    <input type="number" name="qty" value="<?php echo $value['qty']?>" class="form-control qty" id="qty" min="0">
                </td>
                <td colspan="2">
                	 <p>
                        <a href="#" class="updatecart" data-key=<?php echo $key ?>><i class="icons icon-ok-3"></i> Update</a><br>
                        <a href="xoa-gio-hang.php?key=<?php echo $key ?>" class="red-hover"><i class="icons icon-cancel-3"></i> Delete</a>
                    </p>
                </td>
                 <td>
                    <p>₫ <?php echo formatPrice($value['price'] * $value['qty'])?></p>
                </td>
            </tr>
            	<?php $sum +=  $value['price'] * $value['qty']; $_SESSION['tongtien']= $sum; ?>
        		<?php $stt ++; endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="row pull-right">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="carousel-heading no-margin">
            <h4>Thông tin giỏ hàng</h4>
        </div>
        <div class="page-content">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p>No payment selected</p>
                    <span>Số tiền: ₫ <?php echo formatPrice($_SESSION['tongtien']) ?></span>
                    <br>
                    <span>Thuế VAT: 10 %</span>
                    <br>
                    <span>Tổng tiền: ₫ <?php $_SESSION['total'] = $_SESSION['tongtien'] * 110/100; echo formatprice($_SESSION['total']) ?></span>
                    <br><br>
                    <a href="thanh-toan.php" class="button">Thanh toán</a>
                    <a href="index.php" class="button">Tiếp tục mua hàng</a>
                </div>
            </div>
        </div>
    </div>
</div>
 </section>
