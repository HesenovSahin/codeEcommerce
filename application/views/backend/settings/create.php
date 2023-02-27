<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Settings Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('backend/settings/create'); ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="some">some</label>
                            <input type="text" name="some" class="form-control" placeholder="Enter some">
                            <?php echo form_error('some'); ?>
                        </div>
                        <div class="form-group">
                            <label for="any">any</label>
                            <input type="text" name="any" class="form-control" placeholder="Enter any">
                            <?php echo form_error('any'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0">Non-Active</option>
                                <option value="1">Active</option>
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
