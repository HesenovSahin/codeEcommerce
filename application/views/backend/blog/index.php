<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?= $title; ?></h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="<?= base_url('backend/blog/create'); ?>" class="btn btn-primary float-right">
                                            Create
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>title</th>
                                    <th>description</th>
                                    <th>content</th>
                                    <th>image</th>
                                    <th>video</th>
                                    <th>cat_id</th>
                                    <th>is_monset</th>
                                    <th>status</th>
                                    <th>created_at</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($lists as $item) : ?>
                                    <tr>
                                        <td><?= $item->title ?></td>
                                        <td><?= $item->description ?></td>
                                        <td><?= $item->content ?></td>
                                        <td><?= '<img width="150" height="100" src='.base_url('uploads/') . $item->image . '>' ?></td>
                                        <td><?= $item->video ?></td>
                                        <?php foreach($categories as $category) :
                                            if(($item->cat_id) == ($category->id)) : ?>
                                                <td><?= $category->title ?></td>
                                            <?php endif;
                                        endforeach;
                                        ?>
                                        <td><?= $item->is_monset ?></td>
                                        <td><?= $item->status ?></td>
                                        <td><?= $item->created_at ?></td>
                                        <td style="display:flex;column-gap:5px;">
                                            <a href="<?= base_url('backend/blog/edit/'.$item->id); ?>" title="Edit"
                                               class="btn btn-sm btn-primary pull-right">
                                                <i class="voyager-paper-plane">Edit</i>
                                            </a>
                                            <a href="<?= base_url('backend/blog/delete/'.$item->id); ?>"
                                               title="Delete"
                                               class="btn btn-sm btn-danger pull-right">
                                                <i class="voyager-paper-plane">Delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>
</div>
