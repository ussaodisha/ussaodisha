<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Admin/Dashboard')?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ussaodhisha Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Admin/Dashboard')?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data info:</h6>
                <a class="collapse-item" href="<?= base_url('Admin/Users'); ?>">Users</a>
                <a class="collapse-item" href="<?= base_url('Admin/Posts'); ?>">Posts</a>
                <a class="collapse-item" href="<?= base_url('Admin/Gallery'); ?>">Gallery</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-plus-circle"></i>
            <span>Create New</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Create info:</h6>
                <?php if(session()->get('role') == 1):?>
                    <a class="collapse-item" href="<?= base_url('Admin/Create_user'); ?>">Creat User</a>
                <?php endif;?>
                
                <a class="collapse-item" href="<?= base_url('Admin/Create_post'); ?>">Creat Post</a>
                <a class="collapse-item" href="<?= base_url('Admin/Create_gallery'); ?>">Create Gallery</a>
                <!-- <a class="collapse-item" href="#">Link</a> -->
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Another
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Visiter</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Links:</h6>
                <a class="collapse-item" href="<?= base_url('Admin/Subscribers'); ?>">Subscribers</a>
                <!-- <a class="collapse-item" href="<?= base_url('Admin/Notifications'); ?>">Notifications</a> -->
                <!-- <a class="collapse-item" href="<?= base_url('Admin/Messages'); ?>">Messages</a> 
                <a class="collapse-item" href="<?= base_url('Admin/Messages'); ?>">notifications</a>  -->
                <!-- <a class="collapse-item" href="#">link</a> -->
                <div class="collapse-divider"></div>
                <!-- <h6 class="collapse-header">Other links:</h6> -->
                <!-- <a class="collapse-item" href="#">Link</a>
                <a class="collapse-item" href="#">Link</a> -->
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Link</span></a>
    </li> -->

    <!-- Nav Item - Tables -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-table"></i>
        <span>Link</span></a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->