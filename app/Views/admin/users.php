<?= $this->extend('layout/admin') ?>

<?= $this->section('admin-content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Users Page</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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
        <h6 class="m-0 font-weight-bold text-primary">Users Table</h6>
        <?php if(session()->get('role') == 1):?>
            <a href="<?= base_url('Admin/Create_user'); ?>" class="btn btn-sm btn-primary">Create User</a>
        <?php endif;?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th style="width:150px">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(!empty($userdata)):?>
                    <?php foreach($userdata as $value):?>
                        <?php if($value['user_id'] != session()->get('user_id')):?>
                    <tr>
                        <td><?= ucwords($value['Name']); ?></td>
                        <td><?= ucwords($value['Surname']); ?></td>
                        <td><?= $value['Email']; ?></td>
                        <td>
                            <?php if( $value['Role'] == 1 ): ?>
                                Admin
                            <?php else : ?>
                                Co-Admin
                            <?php endif;?>
                        </td>
                        <td class="d-flex justify-content-around align-items-center">
                            <?php if(session()->get('role') == 1):?>
                                <?php if($value['Role'] == 0) :?>
                                <a href="<?= base_url('Admin/make_admin/'.$value['user_id']); ?>" class="btn btn-success btn-sm">
                                    <small>make admin</small>
                                </a>
                                <?php else:?>
                                    <a href="<?= base_url('Admin/remove_admin/'.$value['user_id']); ?>" class="btn btn-warning btn-sm">
                                        <small>remove admin</small>
                                    </a>
                                <?php endif;?>
                            <?php endif;?>
                                <a href="<?= base_url('Admin/delete_user/'.$value['user_id']); ?>" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php endforeach;?>
                <?php else: ?>
                    <p>No Users Found</p>
                <?php endif;?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection()?>