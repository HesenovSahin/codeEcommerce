<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Orders Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('backend/orders/create'); ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="status_id">status_id</label>
                            <select name="status_id" id="">
                                <?php foreach ($orders_status as $order_status) :?>
                                    <option value="<?= $order_status->id?>"><?= $order_status ->title ?></option>
                                <?php endforeach; ?>
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
