<?php
require_once __DIR__. "/autoload/autoload.php";
if(isset($_GET['page']))
{
    $p = $_GET['page'];
}
else
{
    $p = 1;
}


$id =intval(getInput('id'));
$sql ="SELECT * FROM product WHERE category_id =$id";
$categoryname = $db->fetchID("category",$id);

$total = count($db->fetchsql($sql));
$product = $db->fetchJones('product',$sql,$total,$p,9,true);

if(isset($product['page']))
{
    $sotrang=$product['page'];
    unset($product['page']);
}
$path = $_SERVER['SCRIPT_NAME'];
 ?>
    <!-- Header -->
    <?php require_once __DIR__."/layouts/header.php"; ?>
    <!-- /Header -->
    <!-- Content -->
    <!-- Sidebar -->
    <div class="row content">
        <!-- Main Content -->
    <section class="main-content col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3s">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="carousel-heading">
            <h4><?php echo $categoryname['name']?></h4>
        </div>
    </div>
    <!-- Product Item -->
    <?php foreach($product as $item): ?>
    <div class="col-lg-4 col-md-4 col-sm-4 product">
        <div class="product-image">
            <span class="product-tag">sale <?php echo $item['sale'] ?>%</span>
            <img src="<?php echo upload() ?>product/<?php echo $item['thunbar'] ?>" alt="Product1" width="270px" height="270px">
            <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>" class="product-hover">
            <i class="icons icon-eye-1"></i> Quick View
            </a>
        </div>
        <div class="product-info">
            <h5><a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></h5>
            <span class="sale"><strike>₫ <?php echo formatPrice($item['price']) ?></strike></span>
            <span class="price">₫ <?php echo formatpricesale($item['price'],$item['sale']) ?></span>
            <br>
            <div class="rating readonly-rating" data-score="4"></div>
        </div>
       <div class="product-actions">
            <span class="add-to-cart">
            <span class="action-wrapper">
            <i class="icons icon-basket-2"></i>
            <span class="action-name"><a href="them-gio-hang.php?id=<?php echo $item['id'] ?>" style="color:white;">THÊM VÀO GIỎ HÀNG</a></span>
            </span >
            </span>
            <span class="add-to-compare">
            <span class="action-wrapper">
            <i class="icons icon-docs"></i>
            <span class="action-name"><a style="color:white;" href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>">XEM CHI TIẾT</a></span>
            </span>
            </span>
        </div>
    </div>
<?php endforeach ?>
    <div class="clearfix"> </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="pagination">
            <a href="#">
                <div class="previous"><i class="icons icon-left-dir"></i></div>
            </a>
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
                    <a class="<?php echo ($i==$p)? 'active' : ''?>" href="<?php echo $path ?>?id=<?php echo $id ?>&&page=<?php echo $i ;?>">
                        <div class="page-button"><?php echo $i;?></div>
                    </a>
                <?php endfor ?>
                <a href="#">
                <div class="next"><i class="icons icon-right-dir"></i></div>
            </a>
        </div>
    </div>
                </section>    
                <!-- /Main Content -->
                <!-- Sidebar -->
                 <?php require_once __DIR__."/layouts/sidebar.php"; ?>
                 <!-- /Sidebar -->
            </div>

            <!-- /Content -->
            <!-- Footer -->
            <?php require_once __DIR__."/layouts/footer.php"; ?>
            <!-- Footer -->