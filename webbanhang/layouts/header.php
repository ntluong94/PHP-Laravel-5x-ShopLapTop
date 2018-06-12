<!DOCTYPE html>
<html>
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title -->
        <title>HomeShop - HTML Template</title>
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900,700italic,500italic' rel='stylesheet' type='text/css'>
        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/css/flexslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/css/fontello.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/settings.css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/css/animation.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/css/chosen.css">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <link rel="stylesheet" href="public/frontend/css/ie.css">
        <![endif]-->
        <!--[if IE 7]>
        <link rel="stylesheet" href="public/frontend/css/fontello-ie7.css">
        <![endif]-->
    </head>
    <body>
        <!-- Container -->
        <div class="container">
            <!-- Header -->
            <header class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!-- Top Header -->
                    <div id="top-header">
                        <div class="row">

                         <?php if (isset($_SESSION['name_user'])): ?>
                            <nav id="top-navigation" class="col-lg-12 col-md-12 col-sm-12">
                                <ul class="pull-right">
                                    <li>Xin chào : <?php echo $_SESSION['name_user'] ?></li>
                                     <li><a href="dang-xuat.php">Đăng xuất</a></li>
                                </ul>
                            </nav>
                         <?php else: ?>
                            <nav class="col-lg-12 col-md-12 col-sm-12">
                                <ul class="pull-right">
                                     <li class="purple">
                                        <a href="dang-nhap.php"><i class="icons icon-user-3"></i> Đăng nhập</a>
                                    </li>
                                    <li><a href="dang-ky.php"><i class="icons icon-lock"></i> Đăng ký</a></li>
                                  </ul>                          
                            </nav>
                            <?php endif ?>
                        </div>
                    </div>
                    <!-- /Top Header -->
                    <!-- Main Header -->
                    <div id="main-header">
                        <div class="row">
                            <div id="logo" class="col-lg-4 col-md-4 col-sm-4">
                                <a href="home_v1.html"><img src="<?php echo base_url() ?>public/frontend/img/logo.png" alt="Logo"></a>
                            </div>
                            <nav id="middle-navigation" class="col-lg-8 col-md-8 col-sm-8">
                                <ul class="pull-right">
                                    <?php
                                    $total =0;
                                    if(isset($_SESSION['cart']) && $_SESSION['cart'] != null)
                                    {
                                        
                                        foreach($_SESSION['cart'] as $list)
                                         {
                                            $total +=$list['qty'];
                                         }
                                     }
                                     ?>
                                    <li class="orange">
                                        <a href="gio-hang.php"><i class="icons icon-basket-2"></i>Giỏ hàng (<?php echo $total ?>)</a>
                                    </li>
                                    <li>
                                        <a class="flag" href="#"><span class="icon icon-language"></span>Ngôn ngữ</a>
                                        <ul class="box-dropdown parent-arrow">
                                            <li>
                                                <div class="box-wrapper no-padding parent-border">
                                                    <table class="language-table">
                                                           <td class="flag"><span class="english-flag"></span></td>
                                                    <div id="google_translate_element"></div><script type="text/javascript">
                                                    function googleTranslateElementInit() {
                                                      new google.translate.TranslateElement({pageLanguage: '', includedLanguages: 'en,vi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                                    }
                                                    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                                    </table>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /Main Header -->
                     <nav id="main-navigation" class="style1">
                        <ul>
                            <li class="home-green current-item">
                                <a href="/webbanhang/index.php">
                                <i class="icons icon-shop-1"></i>
                                <span class="nav-caption">Home</span>
                                <span class="nav-description">Variety of Layouts</span>
                                </a>  
                            </li>
                            <li class="red">
                                <a href="category_v1.html">
                                <i class="icons icon-camera-7"></i>
                                <span class="nav-caption">Cameras</span>
                                <span class="nav-description">Photo & Video</span>
                                </a>
                                <ul class="wide-dropdown normalAniamtion">
                                    <li>
                                        <ul>
                                            <li><span class="nav-caption">Digital Cameras</span></li>
                                            <li><a href="#"><i class="icons icon-right-dir"></i> Digital SLR</a></li>
                                            <li><a href="#"><i class="icons icon-right-dir"></i> Point &amp; Shoot</a></li>
                                            <li><a href="#"><i class="icons icon-right-dir"></i> Spy, Miniature</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><span class="nav-caption">Digital Cameras</span></li>
                                            <li><a href="#"><i class="icons icon-right-dir"></i> Background Material</a></li>
                                            <li><a href="#"><i class="icons icon-right-dir"></i> Continuous Lighting</a></li>
                                            <li><a href="#"><i class="icons icon-right-dir"></i> Flash Lighting</a></li>
                                            <li><a href="#"><i class="icons icon-right-dir"></i> Light Meters</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><span class="nav-caption">Digital Cameras</span></li>
                                            <li><a href="#"><i class="icons icon-right-dir"></i> Batteries</a></li>
                                            <li><a href="#"><i class="icons icon-right-dir"></i> Cables &amp; Adapters</a></li>
                                            <li><a href="#"><i class="icons icon-right-dir"></i> Camcorder Tapes &amp; Discs</a></li>
                                            <li><a href="#"><i class="icons icon-right-dir"></i> Cases, Bags &amp; Covers</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="blue">
                                <a href="category_v2.html">
                                <i class="icons icon-desktop-3"></i>
                                <span class="nav-caption">Computers</span>
                                <span class="nav-description">Laptops & Tablets</span>
                                </a>
                            </li>
                            <li class="orange">
                                <a href="category_v1.html">
                                <i class="icons icon-mobile-6"></i>
                                <span class="nav-caption">Cell phones</span>
                                <span class="nav-description">Phones & Accessories</span>
                                </a>
                            </li>
                            <li class="green">
                                <a href="blog.html">
                                <i class="icons icon-pencil-7"></i>
                                <span class="nav-caption">Blog</span>
                                <span class="nav-description">News & Reviews</span>
                                </a>
                            </li>
                            <li class="purple">
                                <a href="lien-he.php">
                                <i class="icons icon-location-7"></i>
                                <span class="nav-caption">Contact</span>
                                <span class="nav-description">Store Locations</span>
                                </a>
                            </li>
                            <li class="nav-search">
                                <i class="icons icon-search-1"></i>
                            </li>
                        </ul>
                        <div id="search-bar">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <table id="search-bar-table">
                                    <tr>
                                        <td class="search-column-1">
                                            <p><span class="grey">Popular Searches:</span> <a href="#">accessories</a>, <a href="#">audio</a>, <a href="#">camera</a>, <a href="#">phone</a>, <a href="#">storage</a>, <a href="#">more</a></p>
                                            <input type="text" placeholder="Enter your keyword">
                                        </td>
                                        <td class="search-column-2">
                                            <p class="align-right"><a href="#">Advanced Search</a></p>
                                            <select class="chosen-select-search">
                                                <option>All Categories</option>
                                                <option>All Categories</option>
                                                <option>All Categories</option>
                                                <option>All Categories</option>
                                                <option>All Categories</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="search-button">
                                <input type="submit" value="">
                                <i class="icons icon-search-1"></i>
                            </div>
                        </div>
                    </nav>
                 </div>
            </header>