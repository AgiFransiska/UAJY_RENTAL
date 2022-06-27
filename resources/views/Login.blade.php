<!DOCTYPE html>
<html lang='en' dir="">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>
        LOGIN USER
</title>

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<link href="https://material-dashboard-laravel-livewire.creative-tim.com/assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="https://material-dashboard-laravel-livewire.creative-tim.com/assets/css/nucleo-svg.css" rel="stylesheet" />

<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<link id="pagestyle" href="https://material-dashboard-laravel-livewire.creative-tim.com/assets/css/material-dashboard.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


<body class="g-sidenav-show  bg-gray-200">
    <main class="main-content  mt-0">
        <div class="page-header page-header-bg align-items-start min-vh-100">
            <span class="mask bg-gradient-primary opacity-10"></span>
                <div wire:id="bZAxtaWuQNYAVy8N5RBh" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;bZAxtaWuQNYAVy8N5RBh&quot;,&quot;name&quot;:&quot;auth.login&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;sign-in&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;4d09bc7c&quot;,&quot;data&quot;:{&quot;email&quot;:&quot;admin@material.com&quot;,&quot;password&quot;:&quot;secret&quot;},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;e8398411c0e308e8e929f3e71af4c5218a29ff79e3c02ff962468051989ea699&quot;}}" class="container my-auto mt-5">
                    <div class="row signin-margin">
                        <div class="col-lg-4 col-md-8 col-12 mx-auto">
                            <div class="card z-index-0 fadeIn3 fadeInBottom">

                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in Usera</h4>
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
                                    <form action="login" method="POST">
                                        @csrf
                                        <div class="input-group input-group-outline mt-3  is-filled ">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="password" required 
                                            value="{{ old('email') }}">
                                        </div>

                                        <div class="input-group input-group-outline mt-3  is-filled ">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" required>
                                        </div>

                                        <div class="form-check form-switch d-flex align-items-center my-3">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
                                            <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                                        </div>

                                    </form>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </main>
    <div class="container-fluid">
        @yield('content')
        
</body>
</html>