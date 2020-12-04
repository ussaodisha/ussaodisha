<?= $this->extend('layout/admin') ?>

<?= $this->section('admin-content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Subscribers Page</h1>
    <a href="<?= base_url('Admin/export_csv') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Subscribers Table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 5%;">Id</th>
                        <th style="width: 20%;">Email</th>
                        <th style="width: 20%;">Name</th>
                        <th style="width: 30%;">Message</th>
                        <th style="width: 10%;">Date</th>
                        <th style="width: 10%;">Time</th>
                        <th style="width: 5%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(!empty($subscriberdata)):?>
                    <?php foreach($subscriberdata as $value):?>
                    <tr>
                        <td><small><?= ucwords($value['Sub_id']); ?></small></td>
                        <td><small><?= $value['Emails'] ?></small></td>
                        <td>
                            <?php if(!empty($value['Sub_name']) ): ?>
                                <small><?= ucwords($value['Sub_name']); ?></small>
                            <?php else : ?>
                                <small>null</small>
                            <?php endif;?>
                        </td>
                        <td>
                            <?php if( !empty($value['Sub_message']) ): ?>
                                <small><?= ucwords($value['Sub_message']); ?></small>
                            <?php else : ?>
                                <small>null</small>
                            <?php endif;?>
                        </td>
                        <td><small><?= ucwords($value['Date']); ?></small></td>
                        <td><small><?= ucwords($value['Time']); ?></small></td>
                        <td class="d-flex justify-content-around align-items-center">
                            <!-- <a href="" class="btn btn-sm btn-warning">Make admin</a> -->
                            <a href="<?= base_url('Admin/delete_subscriber/'.$value['Sub_id']); ?>" class="btn btn-danger btn-circle btn-sm">
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