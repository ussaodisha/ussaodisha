<!DOCTYPE html>
<html lang="en">

<head>
    <!-- title -->
    <title><?= $title ?></title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->

    <!-- font awsome cdn link-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('admin-assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('admin-assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <link href="<?= base_url('admin-assets/vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">

</head>

<body id="page-top">
    
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- inlcuded sidebar -->
        <?php include_once('includes/admin/admin-sidebar.php')?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- included header from another file header -->
                <?php include('includes/admin/admin-header.php');?>
                <!-- End included header from another file header -->

                <div class="container-fluid ">
                    <!-- main content render here from another files -->
                    <?= $this->renderSection('admin-content');?>
                    <!-- End of main content render here from another file -->
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- included Footer from another file -->
            <?php include('includes/admin/admin-footer.php');?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Do you want too end current Session</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('Admin/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('admin-assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('admin-assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('admin-assets/js/sb-admin-2.min.js'); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('admin-assets/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('admin-assets/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('admin-assets/js/demo/datatables-demo.js'); ?>"></script>

    

</body>

</html>