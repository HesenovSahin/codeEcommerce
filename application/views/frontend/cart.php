
<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Shopping Cart</a></li>
    </ul>

    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
            <h2 class="title">Shopping Cart</h2>
            <div class="table-responsive form-group">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td class="text-center">Image</td>
                        <td class="text-left">Product Name</td>
                        <td class="text-left">Quantity</td>
                        <td class="text-right">Unit Price</td>
                        <td class="text-right">Total</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($carts as $cart) :?>
                    <tr>
                        <td class="text-center"><a href="<?=base_url('frontend/product/').$cart->product_id?>"><img width="70px" src="<?=base_url('uploads/').$cart->image_path?>" alt="<?=$cart->product_title?>" title="<?=$cart->product_title?>" class="img-thumbnail" /></a></td>
                        <td class="text-left"><a href="<?=base_url('frontend/product/').$cart->product_id?>"><?=$cart->product_title?></a><br /></td>
                        <td class="text-left" width="200px">
                            <div class="input-group btn-block quantity">
                                <input type="text" name="quantity" value="<?=$cart->quantity?>" size="1" class="form-control" />
                                <span class="input-group-btn">
                                    <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary button-update"><i class="fa fa-refresh"></i></button>
                        <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger button-delete" ><i class="fa fa-times-circle"></i></button>
                        </span>
                            </div></td>
                        <td class="text-right"><?=$cart->price?></td>
                        <td class="text-right"><?=$cart->amount?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div
                    class="col-sm-4 col-sm-offset-8">
                <table class="table table-bordered">
                    <tr>
                        <td class="text-right"><strong>Total:</strong></td>
                        <td class="text-right"><?=$total->amount?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="buttons">
            <div class="pull-left"><a href="<?=base_url('frontend')?>" class="btn btn-default">Continue Shopping</a></div>
            <div class="pull-right"><a href="<?=base_url('frontend/checkout')?>" class="btn btn-primary">Checkout</a></div>
        </div>
    </div>
    <!--Middle Part End -->

</div>
</div>
<!-- //Main Container -->