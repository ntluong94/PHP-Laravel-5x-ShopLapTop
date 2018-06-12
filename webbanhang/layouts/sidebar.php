 <aside class="sidebar col-lg-3 col-md-3 col-sm-3  col-lg-pull-9 col-md-pull-9 col-sm-pull-9">
                    <!-- Categories -->
                    <div class="row sidebar-box purple">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="sidebar-box-heading">
                                <i class="icons icon-folder-open-empty"></i>
                                <h4>Danh Mục</h4>
                            </div>
                            <div class="sidebar-box-content">

                                <!--<ul>
                                    <li><a href="#">Cameras &amp; Photography <i class="icons icon-right-dir"></i></a></li>
                                    <li><a href="#">Computers &amp; Tablets <i class="icons icon-right-dir"></i></a></li>
                                    <li>
                                        <a href="#">Cell Phones &amp; Accessories <i class="icons icon-right-dir"></i></a>
                                        <ul class="sidebar-dropdown">
                                            <li>
                                                <ul>
                                                    <li><a href="#">Cell phones &amp; Smartphone</a></li>
                                                    <li><a href="#">Cell Phone Accessories</a></li>
                                                    <li><a href="#">Headsets</a></li>
                                                    <li><a href="#">Cases, Covers & Skins</a></li>
                                                    <li><a href="#">Screen Protectors</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li><a href="#">Chargers & Cradles</a></li>
                                                    <li><a href="#">Batteries</a></li>
                                                    <li><a href="#">Cables & Adapters</a></li>
                                                    <li><a href="#">All About Smartphones</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">TV, Audio &amp; Surveillance <i class="icons icon-right-dir"></i></a></li>
                                    <li><a href="#">Video Games &amp; Consoles <i class="icons icon-right-dir"></i></a></li>
                                    <li><a href="#">Car Audio, Video &amp; GPS <i class="icons icon-right-dir"></i></a></li>
                                    <li><a href="#">Best Sellers <i class="icons icon-right-dir"></i></a></li>
                                    <li><a href="#">Shop by Brands <i class="icons icon-right-dir"></i></a></li>
                                    <li><a class="purple" href="#">All Categories</a></li>
                                </ul>-->
                                <ul>
                                    <?php foreach($category as $item): ?>
                                         <li><a href="danh-muc-san-pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></li>
                                    <?php endforeach; ?>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Categories -->
                    <!-- Compare Products -->
                    <!-- /Compare Products -->
                    <!-- Carousel -->
                    <!-- /Carousel -->
                    <!-- Bestsellers -->
                    <div class="row sidebar-box red">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="sidebar-box-heading">
                                <i class="icons icon-award-2"></i>
                                <h4>Sản phẩm mới</h4>
                            </div>
                            <div class="sidebar-box-content">
                                <table class="bestsellers-table">                            
                                <?php foreach ($productNew as $item):?>
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="<?php echo upload() ?>product/<?php echo $item['thunbar'] ?>" alt="Product1"></a></td>
                                        <td class="product-info">
                                            <p><a href="#"><?php echo $item['name'] ?></a></p>
                                            <span class="sale"><strike>₫ <?php echo formatPrice($item['price']) ?></strike></span>
                                            <br>
                                            <span class="price">₫ <?php echo formatpricesale($item['price'],$item['sale']) ?></span>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row sidebar-box red">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="sidebar-box-heading">
                                <i class="icons icon-award-2"></i>
                                <h4>Sản phẩm bán chạy</h4>
                            </div>
                            <div class="sidebar-box-content">
                                <table class="bestsellers-table">                            
                                <?php foreach ($PayProduct as $item):?>
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="<?php echo upload() ?>product/<?php echo $item['thunbar'] ?>" alt="Product1"></a></td>
                                        <td class="product-info">
                                            <p><a href="#"><?php echo $item['name'] ?></a></p>
                                            <span class="sale"><strike>₫ <?php echo formatPrice($item['price']) ?></strike></span>
                                            <br>
                                            <span class="price">₫ <?php echo formatpricesale($item['price'],$item['sale']) ?></span>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Bestsellers -->
                    <!-- Tag Cloud -->
                    <!-- /Tag Cloud -->
                    <!-- Specials -->
                    <!-- /Specials -->
                </aside>