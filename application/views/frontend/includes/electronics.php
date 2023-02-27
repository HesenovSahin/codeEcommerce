<!-- Block Spotlight3  -->
<div class="so-spotlight3">
    <div class="container">
        <!-- Mod Supercategory 1 -->
        <div class="module cus-style-supper-cate supper1">
            <div class="header">
                <h3 class="modtitle">
								<span class="icon-color">
									<i class="fa fa-empire"></i>
									Electronic
									<small class="arow-after"></small>
								</span>
                    <strong class="line-color"></strong>
                </h3>

            </div>

            <div id="so_super_category_1" class="so-sp-cat first-load">
                <div class="spcat-wrap ">
                    <div class="spcat-tabs-container" data-delay="300" data-duration="600" data-effect="flip" data-ajaxurl="#" data-modid="155">
                        <!--Begin Tabs-->
                        <div class="spcat-tabs-wrap">
                            <span class="spcat-tab-selected">	Rating	</span>
                            <span class="spcat-tab-arrow">▼</span>
                            <ul class="spcat-tabs cf">
                                <li class="spcat-tab  tab-sel tab-loaded" data-active-content=".items-category-sales" data-field_order="sales">
                                    <span class="spcat-tab-label">Sale</span>
                                </li>
                            </ul>
                        </div>
                        <!-- End Tabs-->
                    </div>
                    <div class="main-left">
                        <div class="banner-post-text">
                            <a href="#" title="banner"> <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/banner/s22.jpg" alt="banner">  </a>
                        </div>
                        <div class="hot-category">
                            <div class="category-wrap-cat">
                                <div class="title-imageslider  sp-cat-title-parent">
                                    Hot Categories        </div>

                                <div id="cat_slider_3" class="slider">
                                    <div class="cat_slider_inner so_category_type_default">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="cat_slider_title">
                                                    <?php foreach ($categories as $key => $value):
                                                    if (!empty($value['childs'])):
                                                    foreach ($value['childs'] as $row):
                                                        ?>
                                                    <a href="<?=base_url('frontend/category')?>" title="<?= $row['title'] ?>" target="_self">
                                                        <i class="fa fa-caret-right"></i><?= $row['title'] ?></a>
                                                    <?php endforeach;
                                                    endif;
                                                    endforeach; ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-right">
                        <div class="banner-pre-text">
                            <a href="#" title="banner">   <img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/banner/t22.jpg" alt="banner"></a>
                        </div>

                        <div class="spcat-items-container products-list grid show-pre show-row"><!--Begin Items-->
                            <div class="spcat-items spcat-items-loaded items-category-sales product-layout spcat-items-selected" data-total="9">
                                <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">

                                    <div class="ltabs-items-inner ltabs-slider ">

                                        <?php foreach ($lists as $list) : ?>
                                        <div class="ltabs-item ">
                                            <div class="item-inner product-thumb product-item-container transition ">
                                                <div class="left-block">
                                                    <div class="product-image-container">
                                                        <div class="image">
                                                            <a class="lt-image" href="<?=base_url('frontend/product/'.$list->id)?>" target="_self" title="<?= $list->title?>">
                                                                <?php foreach ($images as $image) :
                                                                    if($image->product_id==$list->id) :
                                                                    ?>
                                                                <img  class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url('uploads/') . $image->path?>" alt="Apple Cinema 30" title="<?= $list->title?>"/>
<!--                                                                <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="--><?php //=base_url('uploads/') . $image->path?><!--" alt="Apple Cinema 30" title="--><?php //= $list->title?><!--"/>-->
                                                                <?php endif;
                                                                endforeach;?>
                                                            </a>

                                                        </div>

                                                    </div>
                                                    <span class="label label-new">New</span>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <h4>
                                                            <a href="<?=base_url('frontend/product/'.$list->id)?>" title="<?= $list->title?>" target="_self">
                                                                <?= $list->title?>							</a>
                                                        </h4>
                                                        <p class="price">
                                                            <span class="price-new"><?= $list->price?></span> <!-- <span class="price-old">$99.00</span> -->

                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                                    <button class="addToCart button-cart" type="button" data-toggle="tooltip" title="Add to Cart" data-id="<?= $list->id?>" ><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                                    <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                                    <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="<?=base_url('frontend/quickview')?>" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                                                </div>
                                            </div>
                                        </div>

                                        <?php

                                        endforeach; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--End Items-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mod -->
        <!-- Banner Content1 -->
        <div class="module banner">
            <div class="banners">
                <div><a title="Static Image" href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?=base_url()?>assets/frontend/image/demo/banner/m5.jpg" alt="Static Image"></a></div>
            </div>
        </div>
        <!-- End Banner -->
    </div>
</div>
