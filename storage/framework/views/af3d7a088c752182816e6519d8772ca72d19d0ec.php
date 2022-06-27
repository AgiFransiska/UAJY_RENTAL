

<?php $__env->startSection('content'); ?>

<div class="container-fluid py-4" style="padding-left : 20%">
    <div class="page-header min-height-300 border-radius-xl mt-4" 
    style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
    </div>

    <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">

            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                <i class="material-icons text-lg position-relative">home</i>
                                    <span class="ms-1">App</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                <i class="material-icons text-lg position-relative">email</i>
                                    <span class="ms-1">Messages</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                <i class="material-icons text-lg position-relative">settings</i>
                                    <span class="ms-1">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <h6 class="mb-3">Customer Information</h6>
                    </div>
                </div>
            </div>
                
            <div class="mb-3 col-md-6">
                <span class="ms-1">Id Customer</span>
                <span class="ms-1 form-control"><?php echo e($customer->id); ?></span>
            </div>

            <div class="mb-3 col-md-6">
                <span class="ms-1">Nama Customer</span>
                <span class="ms-1 form-control"><?php echo e($customer->nama_lengkap); ?></span>
            </div>

            <div class="mb-3 col-md-6">
                <span class="ms-1">Tanggal Lahir</span>
                <span class="ms-1 form-control"><?php echo e($customer->tgl_lahir_customer); ?></span>
            </div>

            <div class="mb-3 col-md-6">
                <span class="ms-1">Jenis Kelamin</span>
                <span class="ms-1 form-control"><?php echo e($customer->jenis_kelamin_customer); ?></span>
            </div>

            <div class="mb-3 col-md-6"> 
                <span class="ms-1">Alamat Customer</span>
                <span class="ms-1 form-control"><?php echo e($customer->alamat_customer); ?></span>
            </div>

            <div class="mb-3 col-md-6">   
                <span class="ms-1">Nomor Telepon</span>
                <span class="ms-1 form-control"><?php echo e($customer->no_telp_customer); ?></span>
            </div>

            <div class="mb-3 col-md-6">    
                <span class="ms-1">Email</span>
                <span class="ms-1 form-control"><?php echo e($customer->email_customer); ?></span>
            </div>
            
            <div class=" me-3 my-3">
                <a class="btn bg-gradient-dark mb-0" href="<?php echo e(route('customer.index')); ?>"></i>Back</a>
            </div>
            
        </div>
    </div>
</div>
      
<?php $__env->stopSection(); ?>



<?php echo $__env->make('dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAJY_RENTAL\resources\views/CustomerCRUD/show.blade.php ENDPATH**/ ?>