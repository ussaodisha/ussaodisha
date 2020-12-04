<?= $this->extend('layout/admin') ?>

<?= $this->section('admin-content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gallery Page</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>

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
        <h6 class="m-0 font-weight-bold text-primary">Gallery Table</h6>
        <a href="<?= base_url('Admin/Create_gallery'); ?>" class="btn btn-sm btn-primary">Create Gallery</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Image</th>
                        <!-- <th>owner</th> -->
                        <th>Name</th>
                        <th>Date</th>
                        <th style="width: 50px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(!empty($gallerydata)):?>
                    <?php foreach($gallerydata as $value):?>
                    <tr>
                        <td>
                            <div class="gallery_imagebox d-flex justify-content-center align-items-center" style="height: 130px;width: auto; max-width: 300px;">
                                <img src="<?= base_url('Uploads/gallery-uploads/'.$value['image_name']); ?>" height="100%" width="auto" alt="gallery_image">
                            </div>
                        </td>
                        <td><?= $value['image_name']; ?></td>
                        <td><?= $value['date']; ?></td>
                        <td class="d-flex justify-content-around align-items-center">
                            <!-- <a href="" class="btn btn-sm btn-warning">Make admin</a> -->
                            <a href="<?= base_url('Admin/delete_gallery/'.$value['gallery_id']); ?>" class="btn btn-danger btn-circle btn-sm">
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