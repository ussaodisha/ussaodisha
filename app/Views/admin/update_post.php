<?= $this->extend('layout/admin') ?>

<?= $this->section('admin-content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update Post</h1>
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
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h4 class="m-0 font-weight-bold text-primary">Update Post</h4>
        <a href="<?= base_url('Admin/Posts'); ?>" class="btn btn-sm btn-primary">Show Posts</a>
        
    </div>
    <div class="card-body">
        <div class="update-post-page">
            <form action="<?= base_url('Admin/Update_post/'.$postdata[0]['Post_id']); ?>" method="post" enctype="multipart/form-data">
                <div class="post-image">
                    <?php if(!empty($postdata[0]['Post_image'])): ?>
                        <img id="blah" src="<?= base_url('Uploads/post-uploads/'.$postdata[0]['Post_image']); ?>" alt="">
                    <?php else: ?>
                        <img id="blah" src="" alt="">
                    <?php endif; ?>
                    <!-- <img id="blah" src="" alt=""> -->
                </div>
                <div class="image-upload-panel mt-4 ">
                        <input type="file" name="postimgfile" id="imgInp" accept="image/*">
                        <label for="imgInp">Choose a photo</label>
                        <input type="hidden" name="old_image" value="<?= $postdata[0]['Post_image']; ?>">
                </div>
                
                <div class="form-group">
                    <label for="postTitle">Post Title</label>
                    <input type="text" name="post_title" id="postTitle" value="<?= $postdata[0]['Post_title']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="postDescription">Post Description</label>
                    <textarea name="post_description" id="postDescription" rows="10" class="form-control"><?= $postdata[0]['Post_description']; ?></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Save Post" class="btn btn-info">
                </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection()?>