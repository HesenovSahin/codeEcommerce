<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Orders Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('backend/orders/edit/'.$item->id); ?>" method="post">
                    <div class="card-body">
<!--                    <div class="form-group">-->
<!--                            <label for="user_id">user_id</label>-->
<!--                            <select name="user_id" id="">-->
<!--                                --><?php //foreach ($users as $user) : ?>
<!--                                    <option value="--><?php //= $user->id?><!--">--><?php //= $user->title ?><!--</option>-->
<!--                                --><?php
//                                endforeach; ?>
<!--                            </select>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label for="title">payments_method</label>-->
<!--                            <input type="text" name="payments_method" class="form-control" value="--><?php //= $item->payments_method; ?><!--" placeholder="Enter title">-->
<!--                            --><?php //echo form_error('payments_method'); ?>
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label for="description">delivery_method</label>-->
<!--                            <input type="text" name="delivery_method" class="form-control" value="--><?php //= $item->delivery_method; ?><!--" placeholder="Enter description">-->
<!--                            --><?php //echo form_error('delivery_method'); ?>
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label for="quantity">total_amount</label>-->
<!--                            <input type="text" name="total_amount" class="form-control" value="--><?php //= $item->total_amount; ?><!--" placeholder="Enter quantity">-->
<!--                            --><?php //echo form_error('total_amount'); ?>
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label for="price">payment_json</label>-->
<!--                            <input type="text" name="payment_json" class="form-control" value="--><?php //= $item->payment_json; ?><!--" placeholder="Enter price">-->
<!--                            --><?php //echo form_error('payment_json'); ?>
<!--                        </div>-->
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select name="status_id" id="">
                                <?php foreach ($orders_status as $order_status) : ?>
                                    <option value="<?= $order_status->id?>"><?= $order_status->title ?></option>
                                <?php
                                endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
</div>
