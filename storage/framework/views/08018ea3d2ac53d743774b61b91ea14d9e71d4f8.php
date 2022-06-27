<!DOCTYPE html>
<html lang='en' dir="">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="76x76" href="https://material-dashboard-laravel-livewire.creative-tim.com/assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="https://material-dashboard-laravel-livewire.creative-tim.com/assets/img/favicon.png">
<title>
        Material Dashboard 2 by Creative Tim & UPDIVISION
    </title>

<meta name="keywords" content="creative tim, updivision, material, html dashboard, laravel, livewire, laravel livewire, alpine.js, html css dashboard laravel, material dashboard laravel, livewire material dashboard, material admin, livewire dashboard, livewire admin, web dashboard, bootstrap 5 dashboard laravel, bootstrap 5, css3 dashboard, bootstrap 5 admin laravel, material dashboard bootstrap 5 laravel, frontend, responsive bootstrap 5 dashboard, material dashboard, material laravel bootstrap 5 dashboard" />
<meta name="description" content="Dozens of handcrafted UI components, Laravel authentication, register & profile editing, Livewire & Alpine.js" />
<meta itemprop="name" content="Material Dashboard 2 Laravel Livewire by Creative Tim & UPDIVISION" />
<meta itemprop="description" content="Dozens of handcrafted UI components, Laravel authentication, register & profile editing, Livewire & Alpine.js" />
<meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/600/original/material-dashboard-laravel-livewire.jpg" />
<meta name="twitter:card" content="product" />
<meta name="twitter:site" content="@creativetim" />
<meta name="twitter:title" content="Material Dashboard 2 Laravel Livewire by Creative Tim & UPDIVISION" />
<meta name="twitter:description" content="Dozens of handcrafted UI components, Laravel authentication, register & profile editing, Livewire & Alpine.js" />
<meta name="twitter:creator" content="@creativetim" />
<meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/600/original/material-dashboard-laravel-livewire.jpg" />
<meta property="fb:app_id" content="655968634437471" />
<meta property="og:title" content="Material Dashboard 2 Laravel Livewire by Creative Tim & UPDIVISION" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://www.creative-tim.com/live/material-dashboard-laravel-livewire" />
<meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/600/original/material-dashboard-laravel-livewire.jpg" />
<meta property="og:description" content="Dozens of handcrafted UI components, Laravel authentication, register & profile editing, Livewire & Alpine.js" />
<meta property="og:site_name" content="Creative Tim" />

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<link href="https://material-dashboard-laravel-livewire.creative-tim.com/assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="https://material-dashboard-laravel-livewire.creative-tim.com/assets/css/nucleo-svg.css" rel="stylesheet" />

<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<link id="pagestyle" href="https://material-dashboard-laravel-livewire.creative-tim.com/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


<body class="g-sidenav-show  bg-gray-200">
    <main class="main-content  mt-0">
        <div class="page-header page-header-bg align-items-start min-vh-100">
            <span class="mask bg-gradient-dark opacity-6"></span>
                <div wire:id="bZAxtaWuQNYAVy8N5RBh" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;bZAxtaWuQNYAVy8N5RBh&quot;,&quot;name&quot;:&quot;auth.login&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;sign-in&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;4d09bc7c&quot;,&quot;data&quot;:{&quot;email&quot;:&quot;admin@material.com&quot;,&quot;password&quot;:&quot;secret&quot;},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;e8398411c0e308e8e929f3e71af4c5218a29ff79e3c02ff962468051989ea699&quot;}}" class="container my-auto mt-5">
                    <div class="row signin-margin">
                        <div class="col-lg-4 col-md-8 col-12 mx-auto">
                            <div class="card z-index-0 fadeIn3 fadeInBottom">

                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in Pegawai</h4>
                                            <div class="row mt-3">
                                                <div class="col-2 text-center ms-auto">
                                                    <a class="btn btn-link px-3" href="javascript:;"><i class="fa fa-facebook text-white text-lg"></i></a>
                                                </div>

                                                <div class="col-2 text-center px-1">
                                                    <a class="btn btn-link px-3" href="javascript:;"><i class="fa fa-github text-white text-lg"></i></a>
                                                </div>

                                                <div class="col-2 text-center me-auto">
                                                    <a class="btn btn-link px-3" href="javascript:;"><i class="fa fa-google text-white text-lg"></i></a>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form action="/LoginPegawai" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="input-group input-group-outline mt-3  is-filled ">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" class="form-control" name="email_pegawai" id="password" required 
                                            value="<?php echo e(old('email_pegawai')); ?>">
                                        </div>

                                        <div class="input-group input-group-outline mt-3  is-filled ">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password_pegawai" id="password" required>
                                        </div>

                                        <div class="form-check form-switch d-flex align-items-center my-3">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
                                            <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                                        </div>

                                        <p class="mt-4 text-sm text-center">Don't have an account?
                                            <a href="https://material-dashboard-laravel-livewire.creative-tim.com/sign-up" class="text-primary text-gradient font-weight-bold">Sign up</a>
                                        </p>

                                        <p class="text-sm text-center">Forgot your password? Reset your password
                                            <a href="https://material-dashboard-laravel-livewire.creative-tim.com/forgot-password" class="text-primary text-gradient font-weight-bold">here</a>
                                        </p>
                                    </form>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </main>
    <div class="container-fluid">
        <?php echo $__env->yieldContent('content'); ?>
        
<script src="https://material-dashboard-laravel-livewire.creative-tim.com/assets/js/core/popper.min.js"></script>
<script src="https://material-dashboard-laravel-livewire.creative-tim.com/assets/js/core/bootstrap.min.js"></script>
<script src="https://material-dashboard-laravel-livewire.creative-tim.com/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="https://material-dashboard-laravel-livewire.creative-tim.com/assets/js/plugins/smooth-scrollbar.min.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="https://material-dashboard-laravel-livewire.creative-tim.com/assets/js/material-dashboard.min.js?v=3.0.0"></script>

<script src="/livewire/livewire.js?id=c69d0f2801c01fcf8166" data-turbo-eval="false" data-turbolinks-eval="false"></script>

</body>
</html><?php /**PATH D:\xampp\htdocs\UAJY_RENTAL\resources\views/Login/auth/LoginPegawai.blade.php ENDPATH**/ ?>