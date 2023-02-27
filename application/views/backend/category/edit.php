<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Brands Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('backend/category/edit/'.$item->id); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">title</label>
                            <input type="text" name="title" class="form-control" value="<?= $item->title; ?>" placeholder="Enter title">
                            <?php echo form_error('title'); ?>
                        </div>
                        <div class="form-group">
                            <label for="parent_id">parent_id</label>
                            <select name="parent_id" id="">
                                <option value="0" <?php echo  ($item->parent_id == 0) ? 'selected' : ''  ?>>Main</option>
                                <?php foreach ($lists as $items) :?>
                                    <option value="<?=$items->id?>" <?= ($items->id==$item->parent_id) ? 'selected' : '' ?> ><?= $items->title ?></option>
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
