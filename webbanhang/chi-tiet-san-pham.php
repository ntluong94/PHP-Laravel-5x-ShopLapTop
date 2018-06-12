<?php
require_once __DIR__. "/autoload/autoload.php";


$id = intval(getInput('id'));
$product = $db->fetchID("product",$id);

 ?>
            <!-- Header -->
            <?php require_once __DIR__."/layouts/header.php"; ?>
            <!-- /Header -->
            <!-- Content -->
             <div class="row content">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumbs">
                        <p><a href="#">Home</a> <i class="icons icon-right-dir"></i> <a href="#">san pham</a> <i class="icons icon-right-dir"></i>chi tiet</p>
                    </div>
                </div>
                <!-- Main Content -->
                <section class="main-content col-lg-12 col-md-12 col-sm-12">
                    <!-- Product -->
                    <div class="product-single">
                        <div class="row">
                            <!-- Product Images Carousel -->
                            <div class="col-lg-4 col-md-4 col-sm-4 product-single-image">
                                <div id="product-slider">
                                    <ul class="slides">
                                        <li>
                                            <img class="cloud-zoom" src="<?php echo upload() ?>product/<?php echo $product['thunbar'] ?>" data-large="<?php echo upload() ?>product/<?php echo $product['thunbar'] ?>"  alt=""/>
                                            <a class="fullscreen-button" href="<?php echo upload() ?>product/<?php echo $product['thunbar'] ?>">
                                                <div class="product-fullscreen">
                                                  
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Product Images Carousel -->
                            <div class="col-lg-8 col-md-8 col-sm-8 product-single-info full-size">
                                <h2><?php echo $product['name'] ?></h2>
                                <table>
                                    <tr>
                                        <td>Sẵn có</td>
                                        <td><span class="green">Trong kho</span> <?php echo $product['number'] ?> mặt hàng</td>
                                    </tr>
                                    <tr>
                                        <td>Product code</td>
                                        <td><?php echo $product['id'] ?></td>
                                    </tr>
                                </table>
                                <span class="price"><del>₫ <?php echo formatPrice($product['price']) ?></del> ₫ <?php echo formatpricesale($product['price'],$product['sale']) ?></span>
                                <table class="product-actions-single">
                                    <tr>
                                        <td>
                                            <a href="them-gio-hang.php?id=<?php echo $item['id'] ?>">
                                            <span class="add-to-cart">
                                            <span class="action-wrapper">
                                            <i class="icons icon-basket-2"></i>
                                            <span class="action-name">THÊM VÀO GIỎ HÀNG</span>
                                            </span>
                                            </span>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Product -->
                  <div class="row">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                            <!-- Accordion -->
                            <div class="accordion">
                                
                                <ul>
                                    <!-- Item -->
                                    <li>
                                    
                                        <div class="accordion-header">
                                            <h4>Chi tiết</h4>
                                            <span class="accordion-button">
                                                <i class="icons icon-plus-1"></i>
                                            </span>
                                        </div>
                                        <div class="accordion-content page-content">
                                            <p><?php echo $product['content'] ?></p>
                                        </div>
                                        
                                    </li>
                                    <!-- /Item -->
                                    
                                    
                                </ul>
                                <!-- /Accordion -->
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    <!-- /New Collection -->
                    <!-- Product Buttons -->
                    <!-- /Product Buttons -->
                </section>
                <!-- /Main Content -->
                <!-- Banner -->
                <section class="banner">
                    <div class="left-side-banner banner-item icon-on-right gray">
                        <h4>8(802)234-5678</h4>
                        <p>Monday - Saturday: 8am - 5pm PST</p>
                        <i class="icons icon-phone-outline"></i>
                    </div>
                    <a href="#">
                        <div class="middle-banner banner-item icon-on-left light-blue">
                            <h4>Free shipping</h4>
                            <p>on all orders over $99</p>
                            <span class="button">Learn more</span>
                            <i class="icons icon-truck-1"></i>
                        </div>
                    </a>
                    <a href="#">
                        <div class="right-side-banner banner-item orange">
                            <h4>Crazy sale!</h4>
                            <p>on selected items</p>
                            <span class="button">Shop now</span>
                        </div>
                    </a>
                </section>
                <!-- /Banner -->
            </div>           
            <!-- /Content -->
            <!-- Footer -->
            <?php require_once __DIR__."/layouts/footer.php"; ?>
            <!-- Footer -->