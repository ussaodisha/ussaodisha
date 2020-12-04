<?= $this->extend('layout/admin') ?>

<?= $this->section('admin-content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Posts Page</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>

<!-- <?php if(session()->get('invalidimage')) :?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Invalid</strong> <?= session()->get('invalidimage'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>             
<?php endif; ?> -->

<?php if(session()->get('success')) :?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> <?= session()->get('success'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>             
<?php endif; ?>

<?php if(session()->get('unsuccess')) :?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Alert !</strong> <?= session()->get('unsuccess'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>             
<?php endif; ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Posts Table</h6>
        <a href="<?= base_url('Admin/Create_post'); ?>" class="btn btn-sm btn-primary">Create post</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 200px;">Title</th>
                        <th style="width: calc(100% - 460px);">Description</th>
                        <th style="width: 100px;">Date</th>
                        <th style="width: 100px;">Owner</th>
                        <th style="width: 60px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(!empty($postdata)):?>
                    <?php foreach($postdata as $value):?>
                    <tr>
                        <td><?= $value['Post_title']; ?></td>
                        <td><?= $value['Post_description']; ?></td>
                        <td><?= $value['Post_date']; ?></td>
                        <td><?= $value['Name']; ?></td>
                        <td class="d-flex justify-content-between align-items-center">
                            <!-- <a href="" class="btn btn-sm btn-warning">Make admin</a> -->
                            <a href="<?= base_url('Admin/Update_post/'.$value['Post_id']); ?>" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?= base_url('Admin/delete_post/'.$value['Post_id']); ?>" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                <?php endif;?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection()?>