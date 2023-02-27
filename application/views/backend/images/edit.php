<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Brands Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('backend/images/edit/'.$item->id); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="path">path</label>
                            <img width="150" height="100" src="<?php echo base_url('uploads/') . $item->path ?>">
                            <input type="file" name="path" class="form-control" value="<?= $item->path; ?>" placeholder="Enter path">
                        </div>
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" <?php echo  ($item->main == 0) ? 'selected' : ''  ?>>Non-Active</option>
                                <option value="1" <?php echo ($item->main == 1) ? 'selected' : ''  ?>>Active</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_id">product_id</label>
                            <select name="product_id" id="">
                                <?php foreach ($products as $product) : ?>
                                    <option value="<?= $product->id?>"><?= $product->title ?></option>
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
