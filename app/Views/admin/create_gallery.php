<?= $this->extend('layout/admin') ?>

<?= $this->section('admin-content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">New Gallery Image</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>

<?php if(session()->get('unsuccess')):?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Unsuccess!</strong> <?= session()->get('unsuccess'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if(session()->get('success')):?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> <?= session()->get('success'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<!-- <div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Reminder !</strong> Profile incomplete please fill remaining details !
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div> -->
    

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 ">
        <h4 class="m-0 font-weight-bold text-primary">Create Gallery</h4>
    </div>
    <div class="card-body">
        <div class="create-gallery-page">
            
            <form action="<?= base_url('Admin/create_gallery'); ?>" method="post" enctype="multipart/form-data">
                <div class="post-image">
                    <img id="blah" src="" alt="image">
                </div>
                <div class="image-upload-panel mt-4 ">
                    <input type="file" name="uploadimgfile" id="imgInp" accept="image/*">
                    <label for="imgInp">Choose a photo</label>
                </div>
                <div class="form-group">
                    <input type="submit" value="Save Image" class="btn btn-info">
                </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection()?>