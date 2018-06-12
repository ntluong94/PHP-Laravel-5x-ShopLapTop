
                <!-- Main Content -->
                <section class="main-content col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">
                    <section class="slider">
                        <div class="tp-banner-container">
                            <div class="tp-banner" >
                                <ul>
                                <?php  foreach($banner as $item): ?>
                                    <!-- SLIDE  -->
                                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo upload() ?>banner/<?php echo $item['pictures'] ?>"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                                        <!-- LAYERS -->
                                    </li>
                                    <?php endforeach ?>
                                    <!-- SLIDE  -->
                                    

                                </ul>
                            </div>
                        </div>
                    </section>
                    <!-- Featured Products -->
                    <div class="products-row row">
                        <!-- Carousel Heading -->
                        <?php foreach ($data as $key =>$value): ?> 
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="carousel-heading">
                                <h4><?php echo $key ?></h4>
                                <div class="carousel-arrows">
                                    <i class="icons icon-left-dir"></i>
                                    <i class="icons icon-right-dir"></i>
                                </div>
                            </div>
                        </div>
                        <!-- /Carousel Heading -->
                        <!-- Carousel -->
                        <div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
                            <div class="owl-carousel" data-max-items="3">
                         <?php foreach ($value as $item):?>
                                <div>
                                    <!-- Carousel Item -->
                                    <div class="product">
                                        <div class="product-image">
                                            <span class="product-tag">sale <?php echo $item['sale'] ?>%</span>
                                            <img src="<?php echo upload() ?>product/<?php echo $item['thunbar'] ?>" alt="Product1" width="270px" height="270px">
                                            <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h5><a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></h5>
                                            <span class="sale"><strike>₫ <?php echo formatPrice($item['price']) ?></strike></span>
                                            <span class="price">₫ <?php echo formatpricesale($item['price'],$item['sale']) ?></span>
                                            <br>
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
                                            <span class="action-name"><a style="color:white;" href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>">XEM CHI TIẾP</a></span>
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- /Carousel Item -->
                                </div>
                        <?php endforeach ?>
                            </div>
                    </div>
                        <!-- /Carousel -->
                    
                        <?php endforeach ?>
                    </div>
                    <!-- /Featured Products -->
                    <!-- New Collection -->
                    <div class="products-row row">
                        <!-- Carousel Heading -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="carousel-heading">
                                <h4>SẢN PHẨM MỚI</h4>
                                <div class="carousel-arrows">
                                    <i class="icons icon-left-dir"></i>
                                    <i class="icons icon-right-dir"></i>
                                </div>
                            </div>
                        </div>
                        <!-- /Carousel Heading -->
                        <!-- Carousel -->
                        <div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
                            <div class="owl-carousel" data-max-items="3">
                                <!-- Slide -->
                                <?php foreach ($productNew as $item):?>
                                <div>
                                    <!-- Carousel Item -->
                                    <div class="product">
                                        <div class="product-image">
                                            <span class="product-tag">New</span>
                                            <img src="<?php echo upload() ?>product/<?php echo $item['thunbar'] ?>" alt="Product1" width="270px" height="270px">
                                            <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h5><a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></h5>
                                            <span class="sale"><strike>₫ <?php echo formatPrice($item['price']) ?></strike></span>
                                            <span class="price">₫ <?php echo formatpricesale($item['price'],$item['sale']) ?></span>
                                            <br>
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
                                    <!-- /Carousel Item -->
                                </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <!-- /Carousel -->
                    </div>
                    <!-- /New Collection -->
                    <!-- Random Products -->
                    <div class="products-row row">
                        <!-- Carousel Heading -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="carousel-heading">
                                <h4>SẢN PHẨM NGẪU NHIÊN</h4>
                                <div class="carousel-arrows">
                                    <i class="icons icon-left-dir"></i>
                                    <i class="icons icon-right-dir"></i>
                                </div>
                            </div>
                        </div>
                        <!-- /Carousel Heading -->
                        <!-- Carousel -->
                        <div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
                            <div class="owl-carousel" data-max-items="3">
                                <!-- Slide -->
                                <?php foreach ($productNew as $item):?>
                                <div>
                                    <!-- Carousel Item -->
                                    <div class="product">
                                        <div class="product-image">
                                            <img src="<?php echo upload() ?>product/<?php echo $item['thunbar'] ?>" alt="Product1" width="270px" height="270px">
                                            <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>">
                                            </a>
                                        </div>
                                      <div class="product-info">
                                            <h5><a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></h5>
                                            <span class="sale"><strike>₫ <?php echo formatPrice($item['price']) ?></strike></span>
                                            <span class="price">₫ <?php echo formatpricesale($item['price'],$item['sale']) ?></span>
                                            <br>
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
                                    <!-- /Carousel Item -->
                                </div>
                                <?php endforeach ?>
                                <!-- /Slide -->    
                            </div>
                        </div>
                        <!-- /Carousel -->
                    </div>
                    <!-- /Random Products -->
                    <!-- Product Brands -->
                    <div class="products-row row">
                        <!-- Carousel Heading -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="carousel-heading">
                                <h4>Product Brands</h4>
                                <div class="carousel-arrows">
                                    <i class="icons icon-left-dir"></i>
                                    <i class="icons icon-right-dir"></i>
                                </div>
                            </div>
                        </div>
                        <!-- /Carousel Heading -->
                        <!-- Carousel -->
                        <div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
                            <div class="owl-carousel" data-max-items="5">
                                <!-- Slide -->
                                <div>
                                    <div class="product">
                                        <a href="#"><img src="<?php echo base_url() ?>public/frontend/img/brands/sample.jpg" alt="Brand1"></a>
                                    </div>
                                </div>
                                <!-- /Slide -->
                                <!-- Slide -->
                                <div>
                                    <div class="product">
                                        <a href="#"><img src="<?php echo base_url() ?>public/frontend/img/brands/sample.jpg" alt="Brand1"></a>
                                    </div>
                                </div>
                                <!-- /Slide -->
                                <!-- Slide -->
                                <div>
                                    <div class="product">
                                        <a href="#"><img src="<?php echo base_url() ?>public/frontend/img/brands/sample.jpg" alt="Brand1"></a>
                                    </div>
                                </div>
                                <!-- /Slide -->
                                <!-- Slide -->
                                <div>
                                    <div class="product">
                                        <a href="#"><img src="<?php echo base_url() ?>public/frontend/img/brands/sample.jpg" alt="Brand1"></a>
                                    </div>
                                </div>
                                <!-- /Slide -->
                                <!-- Slide -->
                                <div>
                                    <div class="product">
                                        <a href="#"><img src="<?php echo base_url() ?>public/frontend/img/brands/sample.jpg" alt="Brand1"></a>
                                    </div>
                                </div>
                                <!-- /Slide -->
                                <!-- Slide -->
                                <div>
                                    <div class="product">
                                        <a href="#"><img src="<?php echo base_url() ?>public/frontend/img/brands/sample.jpg" alt="Brand1"></a>
                                    </div>
                                </div>
                                <!-- /Slide -->
                                <!-- Slide -->
                                <div>
                                    <div class="product">
                                        <a href="#"><img src="<?php echo base_url() ?>public/frontend/img/brands/sample.jpg" alt="Brand1"></a>
                                    </div>
                                </div>
                                <!-- /Slide -->
                                <!-- Slide -->
                                <div>
                                    <div class="product">
                                        <a href="#"><img src="<?php echo base_url() ?>public/frontend/img/brands/sample.jpg" alt="Brand1"></a>
                                    </div>
                                </div>
                                <!-- /Slide -->
                                <!-- Slide -->
                                <div>
                                    <div class="product">
                                        <a href="#"><img src="<?php echo base_url() ?>public/frontend/img/brands/sample.jpg" alt="Brand1"></a>
                                    </div>
                                </div>
                                <!-- /Slide -->
                                <!-- Slide -->
                                <div>
                                    <div class="product">
                                        <a href="#"><img src="<?php echo base_url() ?>public/frontend/img/brands/sample.jpg" alt="Brand1"></a>
                                    </div>
                                </div>
                                <!-- /Slide -->
                            </div>
                        </div>
                        <!-- /Carousel -->
                    </div>
                    <!-- /Product Brands -->
                </section>
