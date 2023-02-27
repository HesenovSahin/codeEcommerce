
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic page needs
	============================================ -->
    <title>Maxshop - Premium Multipurpose HTML5/CSS3 Theme</title>
    <meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/frontend/ico/favicon.png">

    <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/bootstrap/css/bootstrap.min.css">
    <link href="<?=base_url()?>assets/frontend/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/frontend/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/frontend/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/frontend/css/themecss/lib.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/frontend/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">

    <!-- Theme CSS
    ============================================ -->
    <link href="<?=base_url()?>assets/frontend/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/frontend/css/themecss/so-categories.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/frontend/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/frontend/css/themecss/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/frontend/css/themecss/so-super-category.css" rel="stylesheet">
    <link id="color_scheme" href="<?=base_url()?>assets/frontend/css/theme.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/frontend/css/responsive.css" rel="stylesheet">


</head>

<body class="common-home res layout-home1">
<div id="wrapper" class="wrapper-full banners-effect-7">
    <!-- Header Container  -->
    <header id="header" class=" variantleft type_1">
        <!-- Header Top -->
        <div class="header-top compact-hidden">
            <div class="container">
                <div class="row">
                    <div class="header-top-left  col-lg-4  hidden-sm col-md-5 hidden-xs">
                        <ul class="list-inlines">
                            <li class="hidden-xs" >
                                <div class="welcome-msg">
                                    <ul class="list-msg">
                                        <li><label class="label-msg">This week</label> <a href="#">Sale special too good to miss in every gear</a></li>
                                        <li><label class="label-msg">Tomorrow</label> <a href="#">Laten ipsum dolor sit amet. In gravida pellen</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="header-top-right collapsed-block col-lg-8 col-sm-12 col-md-7 col-xs-12 ">
                        <h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
                        <div class="tabBlock" id="TabBlock-1">
                            <ul class="top-link list-inline">
                                <li class="account" id="my_account">
                                    <a href="<?=base_url('frontend/my_account')?>" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span >My Account</span> <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu ">
                                        <?php if ($this->session->has_userdata('userloggedin')) { ?>
                                            <li><a href="<?= base_url('logout/'); ?>"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                                        <?php } else { ?>
                                        <li><a href="<?=base_url('frontend/register')?>"><i class="fa fa-user"></i> Register</a></li>
                                        <li><a href="<?=base_url('frontend/login')?>"><i class="fa fa-pencil-square-o"></i> Login</a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li class="wishlist "><a href="<?=base_url('frontend/wishlist')?>" id="wishlist-total" class="top-link-wishlist" title="Wish List (2)"><span>Wish List (2)</span></a></li>
                                <li class="checkout hidden"><a href="<?=base_url('frontend/checkout')?>" class="top-link-checkout" title="Checkout"><span >Checkout</span></a></li>
                                <li class="login hidden"><a href="<?=base_url('frontend/cart')?>" title="Shopping Cart"><span >Shopping Cart</span></a></li>
                                <li class="form-group currency currencies-block">
                                    <form action="<?=base_url('frontend')?>" method="post" enctype="multipart/form-data" id="currency">
                                        <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                            <span class="icon icon-credit "></span> US Dollar <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu btn-xs">
                                            <li> <a href="#">(€)&nbsp;Euro</a></li>
                                            <li> <a href="#">(£)&nbsp;Pounds	</a></li>
                                            <li> <a href="#">($)&nbsp;US Dollar	</a></li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="form-group languages-block ">
                                    <form action="<?=base_url('frontend')?>" method="post" enctype="multipart/form-data" id="bt-language">
                                        <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                            <img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/flags/gb.png" alt="English" title="English">
                                            <span class="">English</span>
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?=base_url('frontend')?>"><img class="image_flag lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/flags/gb.png" alt="English" title="English" /> English </a></li>
                                            <li> <a href="<?=base_url('frontend')?>"> <img class="image_flag lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/flags/lb.png" alt="Arabic" title="Arabic" /> Arabic </a> </li>
                                        </ul>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Header Top -->
        <!-- Header center -->
        <div class="header-center">
            <div class="container">
                <div class="row">
                    <!-- LOGO -->
                    <div class="navbar-logo col-md-3 col-sm-4 col-xs-10">
                        <a href="<?=base_url('frontend')?>"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/logos/theme_logo.png" title="Your Store" alt="Your Store" /></a>
                    </div>
                    <div class="header-center-right col-md-9 col-sm-8 col-xs-2">
                        <div class="responsive so-megamenu  megamenu-style-dev">
                            <nav class="navbar-default">
                                <div class=" container-megamenu  horizontal">
                                    <div class="navbar-header">
                                        <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="megamenu-wrapper ">
                                        <span id="remove-megamenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                            <div class="container">
                                                <ul class="megamenu " data-transition="slide" data-animationtime="250">
                                                    <li class="home hover">
                                                        <a href="<?=base_url('frontend')?>">Home</a>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="<?=base_url('frontend/about_us')?>" class="clearfix">
                                                            <strong>About Us</strong>
                                                        </a>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="<?=base_url('frontend/category')?>" class="clearfix">
                                                            <strong>Categories</strong>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="<?= base_url('frontend/blog_page')?>" class="clearfix">
                                                            <strong>Blog</strong>
                                                            <span class="label"></span>
                                                        </a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Header center -->
        <!-- Header Bottom -->
        <div class="header-bottom compact-hidden">
            <div class="container">
                <div class="header-bottom-inner">
                    <div class="row">
                        <div class="header-bottom-left menu-vertical col-md-3 col-sm-2 col-xs-2">
                            <div class="responsive so-megamenu megamenu-style-dev">
                                <div class="so-vertical-menu no-gutter compact-hidden">
                                    <nav class="navbar-default">
                                        <div class="container-megamenu vertical open">
                                            <div id="menuHeading">
                                                <div class="megamenuToogle-wrapper">
                                                    <div class="megamenuToogle-pattern">
                                                        <div class="container">
                                                            <div>
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </div>
                                                            Categories
                                                            <i class="fa pull-right arrow-circle fa-chevron-circle-up"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="navbar-header">
                                                <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
                                                    <span class="icon-bar" style="width: 12px;"></span>
                                                    <span class="icon-bar" style="width: 16px;"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                            <div class="vertical-wrapper" >
                                                <span id="remove-verticalmenu" class="fa fa-times"></span>
                                                <div class="megamenu-pattern">
                                                    <div class="container">
                                                        <ul class="megamenu">
                                                            <?php foreach ($categories as $key => $value): ?>
                                                                <li class="item-vertical css-menu with-sub-menu hover">
                                                                    <p class="close-menu"></p>
                                                                    <a href="<?= base_url('frontend/category/' . $value['id']); ?>" class="clearfix">
                                                                        <strong>
                                                                            <span><?= $value['title'] ?></span>
                                                                            <?php if (!empty($value['childs'])): ?>
                                                                                <b class="fa fa-angle-right"></b>
                                                                            <?php endif; ?>
                                                                        </strong>
                                                                    </a>
                                                                    <div class="sub-menu" data-subwidth="30" style="width: 270px; display: none; right: 0px;">
                                                                        <div class="content"  style="display: none;">
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="categories ">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12 hover-menu">
                                                                                                <div class="menu">
                                                                                                    <ul>
                                                                                                        <?php foreach ($value['childs'] as $row): ?>
                                                                                                        <li><a href="<?= base_url('frontend/category/' . $row['id']); ?>" class="main-menu"><?= $row['title'] ?>
                                                                                                                <?php if (!empty($row['childs'])): ?>
                                                                                                                    <b class="fa fa-angle-right"></b>
                                                                                                                <?php endif; ?>
                                                                                                            </a>
                                                                                                               <ul>
                                                                                                                <?php foreach ($row['childs'] as $last):?>
                                                                                                                    <li>
                                                                                                                        <a href="<?= base_url('frontend/category/' . $last['id']); ?>"><?= $last['title'] ?></a>
                                                                                                                    </li>
                                                                                                                <?php endforeach; ?>
                                                                                                               </ul>
                                                                                                        </li>
                                                                                                        <?php endforeach; ?>
                                                                                                    </ul>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Main menu -->
                        <div class="header-bottom-right col-md-9 col-sm-10 col-xs-10">

                        <div class="col-lg-9 col-md-8 col-sm-7 col-xs-9 header_search">
                                <!-- Search -->
                                <div id="sosearchpro" class="search-pro">
                                    <form method="GET" action="<?=base_url('frontend')?>">
                                        <div id="search0" class="search input-group">
                                            <div class="select_category filter_type  icon-select">
                                                <select class="no-border" name="category_id">
                                                    <option value="0">All Category</option>
                                                    <option value="20">Desktops</option>
                                                    <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home 9</option>
                                                    <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home 8</option>
                                                </select>
                                            </div>

                                            <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
                                            <span class="input-group-btn">
												<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
												</span>
                                        </div>
                                        <input type="hidden" name="route" value="product/search" />
                                    </form>
                                </div>
                                <!-- //end Search -->
                            </div>
                            <div class="block-cart">
                                <!--cart-->
                                <div class="shopping_cart pull-right">
                                    <div id="cart" class=" btn-group btn-shopping-cart">
                                        <a data-loading-text="Loading..." class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
                                            <div class="shopcart">
                                                <span class="handle pull-left"></span>
                                                <span class="text-shopping-cart hidden-xs">	My cart	</span>
                                                <span class="text-shopping-cart-mobi hidden-lg hidden-md hidden-sm ">
													  <i class="fa fa-cart-plus"></i>
													</span>
                                            </div>
                                        </a>
                                        <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">
                                            <li>
                                                <table class="table table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-center" style="width:70px">
                                                            <a href="product.html"> <img class="lazyload preview" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/shop/product/35.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign"> </a>
                                                        </td>
                                                        <td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
                                                        <td class="text-center"> x1 </td>
                                                        <td class="text-center"> $1,202.00 </td>
                                                        <td class="text-right">
                                                            <a href="product.html" class="fa fa-edit"></a>
                                                        </td>
                                                        <td class="text-right">
                                                            <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="width:70px">
                                                            <a href="product.html"> <img class="lazyload preview" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/shop/product/141.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D"> </a>
                                                        </td>
                                                        <td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
                                                        <td class="text-center"> x1 </td>
                                                        <td class="text-center"> $60.00 </td>
                                                        <td class="text-right">
                                                            <a href="product.html" class="fa fa-edit"></a>
                                                        </td>
                                                        <td class="text-right">
                                                            <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                            <li>
                                                <div>
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-left"><strong>Sub-Total</strong>
                                                            </td>
                                                            <td class="text-right">$1,060.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><strong>Eco Tax (-2.00)</strong>
                                                            </td>
                                                            <td class="text-right">$2.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><strong>VAT (20%)</strong>
                                                            </td>
                                                            <td class="text-right">$200.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><strong>Total</strong>
                                                            </td>
                                                            <td class="text-right">$1,262.00</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <p class="text-center"> <a class="btn view-cart" href="<?=base_url('frontend/cart')?>"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="<?=base_url('frontend/checkout')?>"><i class="fa fa-share"></i>Checkout</a> </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--//cart-->
                            </div>
                            <div class="header_custom_link hidden-xs">
                                <ul>
                                    <?php if ($this->session->has_userdata('userloggedin')) { ?>
                                    <li><a href="<?=base_url('frontend/logout')?>"><i class="fa fa-user"></i> Logout</a></li>
                                    <?php } else { ?>
                                    <li><a href="<?=base_url('frontend/login')?>"><i class="fa fa-user"></i> Login</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <!-- //end Main menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
