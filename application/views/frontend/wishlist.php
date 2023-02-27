<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Account</a></li>
        <li><a href="#">My Wish List</a></li>
    </ul>

    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
            <h2 class="title">My Wish List</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <td class="text-center">Image</td>
                        <td class="text-left">Product Name</td>
                        <td class="text-left">Model</td>
                        <td class="text-right">Stock</td>
                        <td class="text-right">Unit Price</td>
                        <td class="text-right">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">
                            <a  href="<?=base_url('frontend/product')?>"><img width="70px" src="<?=base_url()?>assets/frontend/image/demo/shop/product/18.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop">
                            </a>
                        </td>
                        <td class="text-left"><a href="<?=base_url('frontend/product')?>">iPod Classic</a>
                        </td>
                        <td class="text-left">product 20</td>
                        <td class="text-right">In Stock</td>
                        <td class="text-right">
                            <div class="price"> 109.21€ </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-primary"
                                    title="" data-toggle="tooltip"
                                    onclick="cart.add('48');"
                                    type="button" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i>
                            </button>
                            <a class="btn btn-danger" title="" data-toggle="tooltip" href="http://localhost/2.2.0.0-compiled/index.html?route=account/wishlist&amp;remove=48"data-original-title="Remove"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="<?=base_url('frontend/product')?>"><img width="70px" src="<?=base_url()?>assets/frontend/image/demo/shop/product/e1.jpg" alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes"></a>
                        </td>
                        <td class="text-left"><a href="<?=base_url('frontend/product')?>">Samsung Galaxy Tab 10.1</a>
                        </td>
                        <td class="text-left">SAM1</td>
                        <td class="text-right">Pre-Order</td>
                        <td class="text-right">
                            <div class="price"> 216.63€ </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-primary"
                                    title="" data-toggle="tooltip"
                                    onclick="" type="button"
                                    data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i>
                            </button>
                            <a class="btn btn-danger" title="" data-toggle="tooltip"
                               href="" data-original-title="Remove"><i class="fa fa-times"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!--Middle Part End-->

    </div>
</div>
