<!DOCTYPE html>
<html lang='en' dir="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="https://material-dashboard-laravel-livewire.creative-tim.com/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="https://material-dashboard-laravel-livewire.creative-tim.com/assets/img/favicon.png">

<title>UAJY RENTAL HOME</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <link href="https://material-dashboard-laravel-livewire.creative-tim.com/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://material-dashboard-laravel-livewire.creative-tim.com/assets/css/nucleo-svg.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <link id="pagestyle" href="https://material-dashboard-laravel-livewire.creative-tim.com/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="g-sidenav-show  bg-gray-200">

    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-2 bg-gradient-dark" id="sidenav-main">
        
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
                <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href="">
                    <img src="assets/img/Logo_Uajy_Rental.png" class="navbar-brand-img h-100" alt="main_logo">
                    <span class="ms-2 font-weight-bold text-white">UAJY RENTAL</span>
                </a>
        </div>

        <hr class="horizontal light mt-0 mb-2">
            <div class="collapse navbar-collapse w-auto max-height-vh-100" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item mt-3">
                        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Menu</h6>
                    </li>

                  

                    <li class="nav-item">
                        <a class="nav-link text-white " href="<?php echo e(url('kendaraan')); ?>">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">directions_car</i>
                            </div>
                                <span class="nav-link-text ms-1">Kendaraan</span>
                        </a>
                    </li>

                   

                    <li class="nav-item">
                        <a class="nav-link text-white " href="<?php echo e(url('promo')); ?>">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">favorite_border</i>
                            </div>
                                <span class="nav-link-text ms-1">Promo</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white " href="<?php echo e(url('customer')); ?>">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                                <span class="nav-link-text ms-1">Customer</span>
                        </a>
                    </li>

                   

                    
    </aside>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
                        <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">Customer</li>
                    </ol>
                        <h6 class="font-weight-bolder mb-0 text-capitalize">Dashboard</h6>
                </nav>

            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group input-group-outline">
                        <label class="form-label">Type here...</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <form method="POST" action="" class="d-none" id="logout-form">
                    <input type="hidden" name="_token" value="t7j77IIxVih6upDxUow1LdlGQ9Vtmig8Vad5Q1kv"> 
                </form>

                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span wire:id="9LggYCqeUrYpmWLjPij0" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;9LggYCqeUrYpmWLjPij0&quot;,&quot;name&quot;:&quot;auth.logout&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;dashboard&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;cbfe6cf3&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;c6b5085fb715290634cd74174f0e2b4a94568c664eeef827456dce9fe8aed5e1&quot;}}" wire:click="destroy" class="d-sm-inline d-none">Sign Out</span>
                        </a>
                    </li>

                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">

                            </ul>
                    </li>

                </ul>
            </div>
            </div>
        </nav>
    </main>

        <div class="container-fluid">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <script src="https://material-dashboard-laravel-livewire.creative-tim.com/assets/js/core/popper.min.js"></script>
        <script src="https://material-dashboard-laravel-livewire.creative-tim.com/assets/js/core/bootstrap.min.js"></script>
        <script src="https://material-dashboard-laravel-livewire.creative-tim.com/assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="https://material-dashboard-laravel-livewire.creative-tim.com/assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="https://material-dashboard-laravel-livewire.creative-tim.com/assets/js/plugins/chartjs.min.js"></script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="https://material-dashboard-laravel-livewire.creative-tim.com/assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\UAJY_RENTAL\resources\views/Dashboard/dashboardCustomer.blade.php ENDPATH**/ ?>