<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Account</a></li>
        <li><a href="#">Register</a></li>
    </ul>

    <div class="row">
        <div id="content" class="col-sm-12">
            <h2 class="title">Register Account</h2>
            <p>If you already have an account with us, please login at the <a href="<?=base_url('frontend/login')?>"><b>login page</b></a>.</p>
            <form action="<?= base_url('frontend/register'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
                <fieldset id="account">
                    <legend>Your Personal Details</legend>
                    <div class="form-group required" style="display: none;">
                        <label class="col-sm-2 control-label">Customer Group</label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="customer_group_id" value="1" checked="checked"> Default
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="name">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name"  placeholder="Name" id="name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="surname">Surname</label>
                        <div class="col-sm-10">
                            <input type="text" name="surname"  placeholder="Surname" id="surname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="email">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="email" name="email"  placeholder="E-Mail" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
                        <div class="col-sm-10">
                            <input type="text" name="phone"  placeholder="Telephone" id="phone" class="form-control">
                        </div>
                    </div>
                </fieldset>
                <fieldset id="address">
                    <legend>Your Address</legend>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="address">Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="address"  placeholder="Address" id="address" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="city">City</label>
                        <div class="col-sm-10">
                            <input type="text" name="city" placeholder="City" id="city" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="country">Country</label>
                        <div class="col-sm-10">
                            <input type="text" name="country"  placeholder="Country" id="country" class="form-control">
                        </div>
                    </div>
                    <!--                    <div class="form-group required">-->
                    <!--                        <label class="col-sm-2 control-label" for="input-country">Country</label>-->
                    <!--                        <div class="col-sm-10">-->
                    <!--                            <select name="country_id" id="input-country" class="form-control">-->
                    <!--                                <option value=""> --- Please Select --- </option>-->
                    <!--                                <option value="1">Afghanistan</option>-->
                    <!--                                <option value="2">Albania</option>-->
                    <!--                                <option value="3">Algeria</option>-->
                    <!--                                <option value="4">American Samoa</option>-->
                    <!--                                <option value="5">Azerbaijan</option>-->
                    <!--                                <option value="6">Angola</option>-->
                    <!--                            </select>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                </fieldset>
                <fieldset>
                    <legend>Your Password</legend>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="password">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password"  placeholder="Password" id="password" class="form-control">
                        </div>
                    </div>
                </fieldset>
                <div class="buttons">
                    <div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Pricing Tables</b></a>
                        <input class="box-checkbox" type="checkbox" name="agree" value="1"> &nbsp;
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
