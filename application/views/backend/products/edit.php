<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Products Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('backend/products/edit/'.$item->id); ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">title</label>
                            <input type="text" name="title" class="form-control" value="<?= $item->title; ?>" placeholder="Enter title">
                            <?php echo form_error('title'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description">description</label>
                            <input type="text" name="description" class="form-control" value="<?= $item->description; ?>" placeholder="Enter description">
                            <?php echo form_error('description'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quantity">quantity</label>
                            <input type="text" name="quantity" class="form-control" value="<?= $item->quantity; ?>" placeholder="Enter quantity">
                            <?php echo form_error('quantity'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">price</label>
                            <input type="text" name="price" class="form-control" value="<?= $item->price; ?>" placeholder="Enter price">
                            <?php echo form_error('price'); ?>
                        </div>
                        <div class="form-group">
                            <label for="brand_id">brand_id</label>
                            <select name="brand_id" id="">
                                <?php foreach ($brands as $brand) :?>
                                    <option value="<?= $brand->id?>" <?= ($item->brand_id==$brand->id) ? 'selected' : '' ?> ><?= $brand->title ?></option>
                                <?php
                                endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id">category_id</label>
                            <select name="category_id" id="">
                                <?php foreach ($category as $cat) :?>
                                    <option value="<?= $category->id?>" <?= ($item->category_id==$category->id) ? 'selected' : '' ?> ><?= $category->title ?></option>
                                <?php
                                endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" <?php echo  ($item->status == 0) ? 'selected' : ''  ?>>Non-Active</option>
                                <option value="1" <?php echo ($item->status == 1) ? 'selected' : ''  ?>>Active</option>
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
