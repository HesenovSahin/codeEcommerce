<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Smartphone & Tablets</a></li>
        <li><a href="#">Comas samer rumas</a></li>
    </ul>
    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-md-12 col-sm-12">

            <div class="product-view row">
                <div class="left-content-product col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="content-product-left  col-sm-6 col-xs-12 ">

                            <div id="thumb-slider-vertical" class="thumb-vertical-outer">
                                <span class="btn-more prev-thumb nt"><i class="fa fa-chevron-up"></i></span>
                                <span class="btn-more next-thumb nt"><i class="fa fa-chevron-down"></i></span>

                                <ul class="thumb-vertical">
                                    <?php foreach ($lists as $list) :
                                        if($item->product_id==$list->id) :
                                            ?>
                                    <li class="owl2-item">
                                        <a data-index="<?=$list->img_pr_id?>" class="img thumbnail" data-image="<?=base_url('uploads/').$list->image_path?>" title="<?=$list->title?>">
                                            <img src="<?=base_url('uploads/').$list->image_path ?>" title="<?=$list->title?>" alt="<?=$list->title?>">
                                        </a>
                                    </li>
                                    <?php endif;
                                    endforeach;?>
                                </ul>
                            </div>
                            <div class="large-image  vertical">
                                <img itemprop="image" class="product-image-zoom" src="<?=base_url('uploads/').$item->path?>" data-zoom-image="<?=base_url('uploads/').$item->path?>" title="<?=$product->title?>" alt="<?=$product->title?>">
                            </div>
                            <a class="thumb-video pull-left" href="https://www.youtube.com/watch?v=UGsExhH7Wm4"><i class="fa fa-youtube-play"></i></a>

                        </div>

                        <div class="content-product-right col-sm-6 col-xs-12">
                            <div class="title-product">
                                <h1><?=$product->title?></h1>
                            </div>
                            <!-- Review ---->
                            <div class="box-review form-group">
                                <div class="ratings">
                                    <div class="rating-box">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    </div>
                                </div>

                                <a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a>	|
                                <a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
                            </div>

                            <div class="product-label form-group">
                                <div class="stock"><span>Availability:</span> <span class="status-stock">In Stock</span></div>
                                <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                    <span class="price-new" itemprop="price"><?=$product->price?></span>
                                    <!--<span class="price-old">$122.00</span>-->
                                </div>

                            </div>

                            <div class="product-box-desc">
                                <div class="inner-box-desc">
                                    <div class="price-tax"><span>Ex Tax:</span> $60.00</div>
                                    <div class="brand"><span>Brand:</span><a href="#">Apple</a>		</div>
                                    <div class="model"><span>Product Code:</span> Product 15</div>
                                    <div class="reward"><span>Reward Points:</span> 100</div>
                                </div>
                            </div>


                            <div id="product">
                                <h4>Available Options</h4>

                                <div class="form-group box-info-product">
                                    <div class="option quantity">
                                        <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                            <label>Qty</label>
                                            <input class="form-control" type="text" name="quantity" id ="quantity" data-id="quantity"
                                                   value="1">
                                            <input type="hidden" name="product_id" value="50">
                                            <span class="input-group-addon product_quantity_down">−</span>
                                            <span class="input-group-addon product_quantity_up">+</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <input class="addToCart button-cart" type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..."  class="btn btn-mega btn-lg" data-id="<?= $product->id?>" data-original-title="Add to Cart">
                                    </div>
                                    <div class="add-to-links wish_comp">
                                        <ul class="blank list-inline">
                                            <li class="wishlist">
                                                <a class="icon" data-toggle="tooltip" title=""
                                                   onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a class="icon" data-toggle="tooltip" title=""
                                                   onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                            <!-- end box info product -->
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                $(document).ready(function() {
                    var zoomCollection = '.large-image img';
                    $( zoomCollection ).elevateZoom({
                        zoomType    : "inner",
                        lensSize    :"200",
                        easing:true,
                        gallery:'thumb-slider-vertical',
                        cursor: 'pointer',
                        galleryActiveClass: "active"
                    });
                    $('.large-image').magnificPopup({
                        items: [
                            {src: 'image/demo/shop/product/1.png' },
                            {src: 'image/demo/shop/product/f9.jpg' },
                            {src: 'image/demo/shop/product/2.png' },
                            {src: 'image/demo/shop/product/3.png' },
                            {src: 'image/demo/shop/product/j9.jpg' },
                        ],
                        gallery: { enabled: true, preload: [0,2] },
                        type: 'image',
                        mainClass: 'mfp-fade',
                        callbacks: {
                            open: function() {

                                var activeIndex = parseInt($('#thumb-slider-vertical .img.active').attr('data-index'));
                                var magnificPopup = $.magnificPopup.instance;
                                magnificPopup.goTo(activeIndex);
                            }
                        }
                    });
                    $("#thumb-slider-vertical .owl2-item").each(function() {
                        $(this).find("[data-index='0']").addClass('active');
                    });

                    $('.thumb-video').magnificPopup({
                        type: 'iframe',
                        iframe: {
                            patterns: {
                                youtube: {
                                    index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
                                    id: 'v=', // String that splits URL in a two parts, second part should be %id%
                                    src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
                                },
                            }
                        }
                    });

                    $('.product-options li.radio').click(function(){
                        $(this).addClass(function() {
                            if($(this).hasClass("active")) return "";
                            return "active";
                        });

                        $(this).siblings("li").removeClass("active");
                        $(this).parent().find('.selected-option').html('<span class="label label-success">'+ $(this).find('img').data('original-title') +'</span>');
                    });

                    var _isMobile = {
                        iOS: function() {
                            return navigator.userAgent.match(/iPhone/i);
                        },
                        any: function() {
                            return (_isMobile.iOS());
                        }
                    };

                    $(".thumb-vertical-outer .next-thumb").click(function () {
                        $( ".thumb-vertical-outer .lSNext" ).trigger( "click" );
                    });

                    $(".thumb-vertical-outer .prev-thumb").click(function () {
                        $( ".thumb-vertical-outer .lSPrev" ).trigger( "click" );
                    });

                    $(".thumb-vertical-outer .thumb-vertical").lightSlider({
                        item: 4,
                        autoWidth: false,
                        vertical:true,
                        slideMargin: 7,
                        verticalHeight:425,
                        pager: false,
                        controls: true,
                        prevHtml: '<i class="fa fa-chevron-up"></i>',
                        nextHtml: '<i class="fa fa-chevron-down"></i>',
                        responsive: [
                            {
                                breakpoint: 1199,
                                settings: {
                                    verticalHeight: 330,
                                    item: 4,
                                }
                            },
                            {
                                breakpoint: 1024,
                                settings: {
                                    verticalHeight: 235,
                                    item: 2,
                                    slideMargin: 5,
                                }
                            },
                            {
                                breakpoint: 768,
                                settings: {
                                    verticalHeight: 340,
                                    item: 3,
                                }
                            }
                            ,
                            {
                                breakpoint: 480,
                                settings: {
                                    verticalHeight: 100,
                                    item: 1,
                                }
                            }

                        ]

                    });



                    // Product detial reviews button
                    $(".reviews_button,.write_review_button").click(function (){
                        var tabTop = $(".producttab").offset().top;
                        $("html, body").animate({ scrollTop:tabTop }, 1000);
                    });
                });

            </script>


        </div>


    </div>
    <!--Middle Part End-->
</div>
