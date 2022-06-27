

<?php $__env->startSection('content'); ?>

<div class="container-fluid py-4" style="padding-left : 20%">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">

                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white mx-3 text-center">
                            <strong> TAMBAH DATA CUSTOMER UAJY RENTAL</strong> 
                        </h6>
                    </div>
                </div>

                <div class=" me-3 my-3 text-end">
                    <a class="btn bg-gradient-dark mb-0" href="<?php echo e(route('customer.index')); ?>"></i>Back</a>
                </div>

                <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-3">Profile Information</h6>
                            </div>
                        </div>
                    </div>

                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger" >
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($errors); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                        </div>
                    <?php endif; ?>
                    <div class="card-body p-3">
                        <form action="<?php echo e(route('customer.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label  class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control border border-2 p-2 border border-2 p-2 border border-2 p-2" id="colFormLabel" name="nama_lengkap" required>                               
                                </div>
                    
                                <div class="mb-3 col-md-6">
                                    <label  class="form-label">Alamat</label>
                                        <input type="text" class="form-control border border-2 p-2 border border-2 p-2" id="colFormLabel" name="alamat_customer">
                                </div>
                    
                                <div class="mb-3 col-md-6">
                                    <label  class="form-label">Tanggal Lahir</label>  
                                        <input type="date" class="form-control border border-2 p-2 border border-2 p-2" id="colFormLabel" name="tgl_lahir_customer">    
                                </div>
                    
                                <div class="mb-3 col-md-6">
                                    <label  class="form-label">Jenis Kelamin</label>            
                                        <input type="text" class="form-control border border-2 p-2 border border-2 p-2" id="colFormLabel" name="jenis_kelamin_customer">                                 
                                </div>
                    
                                <div class="mb-3 col-md-6">
                                    <label  class="form-label">Email</label>                             
                                        <input type="email" class="form-control border border-2 p-2 border border-2 p-2" id="colFormLabel" name="email_customer">                              
                                </div>
                    
                                <div class="mb-3 col-md-6">
                                    <label  class="form-label">Nomor Telepon</label>                                
                                        <input type="text" class="form-control border border-2 p-2 border border-2 p-2" id="colFormLabel" name="no_telp_customer">                           
                                </div>      
                                
                            </div>
                                <button type="submit" class="btn bg-gradient-dark">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                <div class="card-body px-0 pb-2">
                    
                </div>
    </div>                 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAJY_RENTAL\resources\views/CustomerCRUD/create.blade.php ENDPATH**/ ?>