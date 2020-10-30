<?= $this->extend('layout/admin') ?>

<?= $this->section('admin-content') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Notifications Page</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Notification Table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>From</th>
                        <th>Text</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i=1; $i <= 20; $i++): ?>
                    <tr>
                        <td>Dhiraj</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta, eaque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, reprehenderit sed. Laborum deleniti modi sapiente quisquam iusto illo blanditiis nisi!</td>
                        <td>01/01/2020</td>
                        <td class="d-flex justify-content-around align-items-center">
                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endfor ;?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection()?>