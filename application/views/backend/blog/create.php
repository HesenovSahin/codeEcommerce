<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Blog Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('backend/blog/create'); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title">
                            <?php echo form_error('title'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description">description</label>
                            <input type="text" name="description" class="form-control" placeholder="Enter description">
                            <?php echo form_error('description'); ?>
                        </div>
                        <div class="form-group">
                            <label for="content">content</label>
                            <input type="text" name="content" class="form-control" placeholder="Enter content">
                            <?php echo form_error('content'); ?>
                        </div>
                        <div class="form-group">
                            <label for="image">image</label>
                            <input type="file" name="image" class="form-control" placeholder="Enter image">
                        </div>
                        <div class="form-group">
                            <label for="cat_id">cat_id</label>
                            <select name="cat_id" id="">
                                <?php foreach ($categories as $category) :?>
                                    <option value="<?= $category->id?>"><?= $category->title ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="is_monset">is_monset</label>
                            <input type="number" max="1" min="0" name="is_monset" class="form-control" placeholder="Enter is_monset">
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
