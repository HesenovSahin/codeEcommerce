<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Checkout</a></li>

    </ul>

    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
            <h2 class="title">Checkout</h2>
            <div class="row">
                <form action="<?= base_url('frontend/checkout/insert') ?>" method="post">
                <?php if (!$this->session->has_userdata('userloggedin')) { ?>
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
                            </div>
                            <div class="panel-body">
                                <fieldset id="account">
                                    <div class="form-group required">
                                        <label for="input-payment-firstname" class="control-label">First Name</label>
                                        <input type="text" class="form-control" id="input-payment-firstname" placeholder="First Name" value="" name="firstname">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-payment-lastname" class="control-label">Last Name</label>
                                        <input type="text" class="form-control" id="input-payment-lastname" placeholder="Last Name" value="" name="lastname">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-payment-email" class="control-label">E-Mail</label>
                                        <input type="text" class="form-control" id="input-payment-email" placeholder="E-Mail" value="" name="email">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-payment-telephone" class="control-label">Telephone</label>
                                        <input type="text" class="form-control" id="input-payment-telephone" placeholder="Telephone" value="" name="telephone">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-book"></i> Your Address</h4>
                            </div>
                            <div class="panel-body">
                                <fieldset id="address" >
                                    <div class="form-group">
                                        <label for="input-payment-address-2" class="control-label">Address</label>
                                        <input type="text" class="form-control" id="input-payment-address-2" placeholder="Address" value="" name="address">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-payment-city" class="control-label">City</label>
                                        <input type="text" class="form-control" id="input-payment-city" placeholder="City" value="" name="city">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-payment-country" class="control-label">Country</label>
                                        <input type="text" name="country"  placeholder="Country" id="country" class="form-control">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                <?php }  ?>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-truck"></i> Delivery Method</h4>
                                </div>
                                <div class="panel-body">
                                    <p>Please select the preferred shipping method to use on this order.</p>
                                    <?php foreach ($del_methods as $del_method) : ?>
                                        <input type="radio"  name="delivery_methods" value="<?= $del_method->id ?>">
                                        <label for="<?= $del_method->title ?>"><?= $del_method->title ?></label><br>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method</h4>
                                </div>
                                <div class="panel-body">
                                    <p>Please select the preferred payment method to use on this order.</p>
                                    <?php foreach ($pay_methods as $pay_method) : ?>
                                        <input type="radio"  name="payment_methods" value="<?= $pay_method->id ?>">
                                        <label for="<?= $pay_method->title ?>"><?= $pay_method->title ?></label><br>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <td class="text-center">Image</td>
                                                <td class="text-left">Product Name</td>
                                                <td class="text-left">Quantity</td>
                                                <td class="text-right">Unit Price</td>
                                                <td class="text-right">AMOUNT</td>
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
                                                                <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                                                                <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button></span>
                                                        </div></td>
                                                    <td class="text-right"><?=$cart->price?></td>
                                                    <td class="text-right"><?=$cart->amount?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td class="text-right" colspan="4"><strong>Total:</strong></td>
                                                <td class="text-right"><?=$total->amount?></td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="buttons">
                                    <div class="pull-right">
                                        <input type="submit" class="btn btn-primary" id="button-confirm" value="ConfirmOrder">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!--Middle Part End -->

</div>
</div>