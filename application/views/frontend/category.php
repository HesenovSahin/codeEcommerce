<!-- Main Container  -->
<div class="main-container container">
<!--    <ul class="breadcrumb">-->
<!--        <li><a href="#"><i class="fa fa-home"></i></a></li>-->
<!--        <li><a href="#">Smartphone & Tablets</a></li>-->
<!--    </ul>-->
    <div class="row">
        <!--Left Part Start -->
        <aside class="col-sm-4 col-md-3" id="column-left">
            <div class="module block-shopby titleLine">
                <h3 class="modtitle"><span>Shop By </span></h3>
                <div class="modcontent ">
                    <form class="type_2">

                        <div class="table_layout filter-shopby">
                            <div class="table_row">
                                <!-- - - - - - - - - - - - - - Category filter - - - - - - - - - - - - - - - - -->
                                <div class="table_cell" style="z-index: 103;">
                                    <legend>Search</legend>

                                    <div class="input-group">
                                        <input class="form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default inverse" type="button" id="submit_text_search"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div><!--/ .table_cell -->
                                <!-- - - - - - - - - - - - - - End of category filter - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - SUB CATEGORY - - - - - - - - - - - - - - - - -->
                                <div class="table_cell">
                                    <fieldset>
                                        <legend>Sub Category</legend>
                                        <ul class="checkboxes_list">
                                            <?php foreach ($categories as $key => $value): ?>
                                            <li>
                                                <input type="checkbox" name="category" id="<?= $value['id'] ?>">
                                                <label for="<?= $value['id'] ?>"><?= $value['title'] ?></label>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>

                                    </fieldset>

                                </div><!--/ .table_cell -->
                                <!-- - - - - - - - - - - - - - End SUB CATEGORY - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
                                <div class="table_cell">
                                    <fieldset>
                                        <legend>Manufacturer</legend>
                                        <ul class="checkboxes_list">
                                            <li>
                                                <input type="checkbox" checked="" name="manufacturer" id="manufacturer_1">
                                                <label for="manufacturer_1">Manufacturer 1</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="manufacturer" id="manufacturer_2">
                                                <label for="manufacturer_2">Manufacturer 2</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="manufacturer" id="manufacturer_3">
                                                <label for="manufacturer_3">Manufacturer 3</label>
                                            </li>

                                        </ul>

                                    </fieldset>

                                </div><!--/ .table_cell -->
                                <!-- - - - - - - - - - - - - - End manufacturer - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
                                <div class="table_cell">
                                    <fieldset>
                                        <legend>Price</legend>
                                        <div class="range">
                                            Range :
                                            <span class="min_val">$188.73</span> -
                                            <span class="max_val">$335.15</span>
                                            <input type="hidden" name="" class="min_value" value="188.73">
                                            <input type="hidden" name="" class="max_value" value="335.15">
                                        </div>
                                        <div id="slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" ></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" ></span>
                                        </div>
                                    </fieldset>
                                </div><!--/ .table_cell -->

                                <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

                                <!--/ .table_cell -->

                                <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .table_row -->
                            <footer class="bottom_box">
                                <div class="buttons_row">

                                    <button type="reset" class="button_grey filter_reset">Reset All</button>
                                </div>
                            </footer>
                        </div><!--/ .table_layout -->
                    </form>
                </div>
            </div>

            <div class="module latest-product titleLine">
                <h3 class="modtitle"><span>Latest Product</span></h3>
                <div class="modcontent ">
                    <div class="product-latest-item">
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img src="image/demo/shop/product/m1.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 90px; height: 90px;"></a>
                            </div>
                            <div class="media-body">
                                <div class="caption">
                                    <h4><a href="#">Sunt Molup</a></h4>

                                    <div class="price">
                                        <span class="price-new">$100.00</span>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="product-latest-item">
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img src="image/demo/shop/product/m2.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 90px; height: 90px;"></a>
                            </div>
                            <div class="media-body">
                                <div class="caption">
                                    <h4><a href="#">Et Spare</a></h4>

                                    <div class="price">
                                        <span class="price-new">$99.00</span>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="product-latest-item">
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img src="image/demo/shop/product/18.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 90px; height: 90px;"></a>
                            </div>
                            <div class="media-body">
                                <div class="caption">
                                    <h4><a href="#">Cisi Chicken</a></h4>

                                    <div class="price">
                                        <span class="price-new">$59.00</span>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="module">
                <div class="modcontent clearfix">
                    <div class="banners">
                        <div>
                            <a href="#"><img src="image/demo/cms/left-image-static.png" alt="left-image"></a>
                        </div>
                    </div>

                </div>
            </div>
        </aside>
        <!--Left Part End -->
        <!--Middle Part Start-->
        <div id="content" class="col-md-9 col-sm-8">
            <div class="products-category">
                <!--- Subcategories - -->
                <div class="refine-search form-group">
                    <div class="row">
                        <div class="form-group col-md-15 col-sm-4 col-xs-12 ">
                            <a href="#" class="thumbnail"><img src="image/demo/shop/product/m2.jpg" alt="Car Alarms and Security"></a> <a href="#">Car Alarms and Security</a>
                        </div>
                    </div>
                </div>
                <!---//Subcategories - -->
                <!-- Filters -->
                <div class="product-filter filters-panel">
                    <div class="row">
                        <div class="col-md-2 visible-lg">
                            <div class="view-mode">
                                <div class="list-view">
                                    <button class="btn btn-default grid " data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
                                    <button class="btn btn-default list active" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="short-by-show form-inline text-right col-md-7 col-sm-8 col-xs-12">
                            <div class="form-group short-by">
                                <label class="control-label" for="input-sort">Sort By:</label>
                                <select id="input-sort" class="form-control">
                                    <option value="" selected="selected">Default</option>
                                    <option value="">Name (A - Z)</option>
                                    <option value="">Name (Z - A)</option>
                                    <option value="">Price (Low &gt; High)</option>
                                    <option value="">Price (High &gt; Low)</option>
                                    <option value="">Rating (Highest)</option>
                                    <option value="">Rating (Lowest)</option>
                                    <option value="">Model (A - Z)</option>
                                    <option value="">Model (Z - A)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-limit">Show:</label>
                                <select id="input-limit" class="form-control">
                                    <option value="" selected="selected">9</option>
                                    <option value="">25</option>
                                    <option value="">50</option>
                                    <option value="">75</option>
                                    <option value="">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
                            <ul class="pagination">
                                <li class="active"><span>1</span></li>
                                <li><a href="">2</a></li><li><a href="">&gt;</a></li>
                                <li><a href="">&gt;|</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- //end Filters -->
                <!--changed listings-->
                <div class="products-list row list">
                    <div class="product-layout  col-md-3 col-sm-6 col-xs-12">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container lazy second_img ">
                                    <img data-src="image/demo/shop/product/e11.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-1 img-responsive" />
                                    <img data-src="image/demo/shop/product/e12.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-2 img-responsive" />
                                </div>
                                <!--Sale Label-->
                                <span class="label label-sale">Sale</span>
                                <!--full quick view block-->
                                <div class="countdown_box">
                                    <div class="countdown_inner">
                                        <div class="defaultCountdown-30"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <span class="price-new">$74.00</span>
                                        <span class="price-old">$122.00</span>
                                        <span class="label label-percent">-40%</span>
                                    </div>
                                    <div class="description item-desc hidden">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                    </div>
                                </div>
                            </div><!-- right block -->
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs name-cart">Add to Cart</span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-layout col-md-3 col-sm-6 col-xs-12">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container lazy second_img ">
                                    <img data-src="image/demo/shop/product/e3.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-1 img-responsive" />
                                    <img data-src="image/demo/shop/product/e3_1.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-2 img-responsive" />
                                </div>
                                <!--Sale Label-->
                                <span class="label label-sale">Sale</span>

                            </div>
                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="product.html">HP Pad EOS 5D</a></h4>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <span class="price-new">$60.00</span>
                                        <span class="price-old">$145.00</span>
                                        <span class="label label-percent">-20%</span>
                                    </div>
                                    <div class="description item-desc hidden">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                    </div>
                                </div>
                            </div><!-- right block -->
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs name-cart">Add to Cart</span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-layout  col-md-3 col-sm-6 col-xs-12 ">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container lazy second_img ">
                                    <img data-src="image/demo/shop/product/j3.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-1 img-responsive" />
                                    <img data-src="image/demo/shop/product/j4.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-2 img-responsive" />
                                </div>
                                <!--Sale Label-->
                                <span class="label label-new">New</span>
                            </div>


                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="product.html">Filet Mign</a></h4>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <span class="price-new">$58.00</span>
                                        <span class="price-old">$172.00</span>
                                        <span class="label label-percent">-42%</span>
                                    </div>
                                    <div class="description item-desc hidden">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                    </div>
                                </div>
                            </div><!-- right block -->
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs name-cart">Add to Cart</span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-layout  col-md-3 col-sm-6 col-xs-12 ">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container lazy second_img ">
                                    <img data-src="image/demo/shop/product/14.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-1 img-responsive" />
                                    <img data-src="image/demo/shop/product/15.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-2 img-responsive" />
                                </div>
                                <div class="countdown_box">
                                    <div class="countdown_inner">
                                        <div class="defaultCountdown-30"></div>
                                    </div>
                                </div>
                                <!--Sale Label-->
                                <span class="label label-sale">Sale</span>

                            </div>

                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="product.html">Lorem Cow</a></h4>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <span class="price-new">$74.00</span>
                                        <span class="price-old">$122.00</span>
                                        <span class="label label-percent">-28%</span>
                                    </div>
                                    <div class="description item-desc hidden">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                    </div>
                                </div>
                            </div><!-- right block -->
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs name-cart">Add to Cart</span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-layout  col-md-3 col-sm-6 col-xs-12 ">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container lazy second_img ">
                                    <img data-src="image/demo/shop/product/18.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-1 img-responsive" />
                                    <img data-src="image/demo/shop/product/1.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-2 img-responsive" />
                                </div>
                                <!--Sale Label-->
                                <span class="label label-sale">Sale</span>
                            </div>

                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="product.html">Ipad Mini</a></h4>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <span class="price-new">$75.00</span>
                                        <span class="price-old">$145.00</span>
                                        <span class="label label-percent">-20%</span>
                                    </div>
                                    <div class="description item-desc hidden">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                    </div>
                                </div>

                            </div><!-- right block -->
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs name-cart">Add to Cart</span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-layout  col-md-3 col-sm-6 col-xs-12 ">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container lazy second_img ">
                                    <img data-src="image/demo/shop/product/j9.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-1 img-responsive" />
                                    <img data-src="image/demo/shop/product/j10.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-2 img-responsive" />
                                    <span class="label label-new">New</span>
                                </div>

                            </div>

                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="product.html">Nikon D300</a></h4>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <span class="price-new">$99.00</span>
                                    </div>
                                    <div class="description item-desc hidden">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                    <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs name-cart">Add to Cart</span></button>
                                    <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                    <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                                </div>
                            </div><!-- right block -->

                        </div>
                    </div>

                    <div class="product-layout  col-md-3 col-sm-6 col-xs-12 ">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container lazy second_img ">
                                    <img data-src="image/demo/shop/product/m1.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-1 img-responsive" />
                                    <img data-src="image/demo/shop/product/m2.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-2 img-responsive" />
                                </div>

                            </div>

                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="product.html">Zalora D301</a></h4>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <span class="price-new">$78.00</span>
                                    </div>
                                    <div class="description item-desc hidden">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                    </div>
                                </div>

                            </div><!-- right block -->
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs name-cart">Add to Cart</span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-layout  col-md-3 col-sm-6 col-xs-12 ">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container lazy second_img ">
                                    <img data-src="image/demo/shop/product/w1.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-1 img-responsive" />
                                    <img data-src="image/demo/shop/product/w10.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-2 img-responsive" />
                                    <span class="label label-sale">Sale</span>
                                    <span class="label label-new">New</span>
                                </div>

                            </div>

                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="product.html">Chopard 201</a></h4>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <span class="price-new">$69.00</span>
                                        <span class="price-old">$122.00</span>
                                        <span class="label label-percent">-30%</span>
                                    </div>
                                    <div class="description item-desc hidden">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                    </div>
                                </div>

                            </div><!-- right block -->
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs name-cart">Add to Cart</span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-layout  col-md-3 col-sm-6 col-xs-12 ">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container lazy second_img ">
                                    <img data-src="image/demo/shop/product/m2.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-1 img-responsive" />
                                    <img data-src="image/demo/shop/product/9.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-2 img-responsive" />
                                    <span class="label label-new">New</span>
                                    <!--countdown box-->
                                    <div class="countdown_box">
                                        <div class="countdown_inner">
                                            <div class="defaultCountdown-30"></div>
                                        </div>
                                    </div>
                                    <!--end countdown box-->
                                </div>

                            </div>

                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="product.html">Lion Nikon D3</a></h4>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <span class="price-new">$99.00</span>
                                    </div>
                                    <div class="description item-desc hidden">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                    </div>
                                </div>

                            </div><!-- right block -->
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs name-cart">Add to Cart</span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-layout col-md-3 col-sm-6 col-xs-12 ">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container lazy second_img ">
                                    <img data-src="image/demo/shop/product/1.png" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-1 img-responsive" />
                                    <img data-src="image/demo/shop/product/f9.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-2 img-responsive" />
                                </div>
                                <!--Sale Label-->
                                <span class="label label-sale">Sale</span>
                            </div>

                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="product.html">Electric No1</a></h4>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <span class="price-new">$75.00</span>
                                        <span class="price-old">$145.00</span>
                                        <span class="label label-percent">-20%</span>
                                    </div>
                                    <div class="description item-desc hidden">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                    </div>
                                </div>

                            </div><!-- right block -->
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs name-cart">Add to Cart</span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-layout  col-md-3 col-sm-6 col-xs-12 ">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container lazy second_img ">
                                    <img data-src="image/demo/shop/product/j1.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-1 img-responsive" />
                                    <img data-src="image/demo/shop/product/j2.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-2 img-responsive" />
                                    <span class="label label-sale">Sale</span>
                                    <span class="label label-new">New</span>
                                </div>

                            </div>

                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="product.html">Naka Moratat Her</a></h4>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <span class="price-new">$69.00</span>
                                        <span class="price-old">$122.00</span>
                                        <span class="label label-percent">-30%</span>
                                    </div>
                                    <div class="description item-desc hidden">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                    </div>
                                </div>

                            </div><!-- right block -->
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs name-cart">Add to Cart</span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-layout col-md-3 col-sm-6 col-xs-12 ">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container lazy second_img ">
                                    <img data-src="image/demo/shop/product/w10.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-1 img-responsive" />
                                    <img data-src="image/demo/shop/product/w1.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-2 img-responsive" />
                                    <span class="label label-sale">Sale</span>
                                    <span class="label label-new">New</span>
                                </div>

                            </div>

                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="product.html">Rolex No01</a></h4>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <span class="price-new">$69.00</span>
                                        <span class="price-old">$122.00</span>
                                        <span class="label label-percent">-30%</span>
                                    </div>
                                    <div class="description item-desc hidden">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                    </div>
                                </div>

                            </div><!-- right block -->
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs name-cart">Add to Cart</span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// End Changed listings-->
                <!-- Filters -->
                <div class="product-filter product-filter-bottom filters-panel" >
                    <div class="row">
                        <div class="col-md-2 hidden-sm hidden-xs">

                        </div>
                        <div class="short-by-show text-center col-md-7 col-sm-8 col-xs-12">
                            <div class="form-group" style="margin: 3px 10px">Showing 1 to 9 of 10 (2 Pages)</div>
                        </div>
                        <div class="box-pagination col-md-3 col-sm-4 text-right"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="#">2</a></li><li><a href="#">&gt;</a></li><li><a href="#">&gt;|</a></li></ul></div>

                    </div>
                </div>
                <!-- //end Filters -->
            </div>
        </div>
        <!--Middle Part End-->
    </div>
</div>
