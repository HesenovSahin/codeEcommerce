<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Brands Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('backend/images/create'); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="path">path</label>
                            <input type="file" name="path" class="form-control" placeholder="Enter path">
                        </div>
                        <div class="form-group">
                            <label for="main">main</label>
                            <br>
                            <select class="custom-select form-control" id="main" name="main">
                                <option value="0">Non-Active</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">product_id</label>
                            <select name="product_id" id="">
                                <?php foreach ($products as $product) :?>
                                    <option value="<?= $product->id?>"><?= $product->title ?></option>
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
