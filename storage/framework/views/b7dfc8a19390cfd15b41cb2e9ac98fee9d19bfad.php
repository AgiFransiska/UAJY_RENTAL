

<?php $__env->startSection('content'); ?>

<div class="container-fluid py-4" style="padding-left : 20%">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">

                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white mx-3 text-center">
                            <strong> EDIT DATA PROMO UAJY RENTAL</strong> 
                        </h6>
                    </div>
                </div>

                <div class=" me-3 my-3 text-end">
                    <a class="btn bg-gradient-dark mb-0" href="<?php echo e(route('promo.index')); ?>"></i>Back</a>
                </div>

                <div class="card card-plain h-100">
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
                        <form action="<?php echo e(route('promo.update', $promo->id)); ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                        
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Kode Promo</label>
                                        <input type="text" class="form-control border border-2 p-2" value="<?php echo e($promo->kode_promo); ?>" id="colFormLabel" name="kode_promo">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jenis Promo</label>
                                        <input type="text" class="form-control border border-2 p-2" value="<?php echo e($promo->jenis_promo); ?>" id="colFormLabel" name="jenis_promo">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Diskon</label>
                                        <input type="text" class="form-control border border-2 p-2" value="<?php echo e($promo->diskon); ?>" id="colFormLabel" name="diskon">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Keterangan</label>
                                        <input type="text" class="form-control border border-2 p-2" value="<?php echo e($promo->keterangan); ?>" id="colFormLabel" name="keterangan">
                                </div>

                               <div class="mb-3 col-md-6">
                                    <label class="form-label">Status Promo</label>
                                        <input type="text" class="form-control border border-2 p-2" value="<?php echo e($promo->status_promo); ?>" id="colFormLabel" name="status_promo">
                                </div>
                    
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-outline-primary mx-2" type="submit">Tambah</button>
                                    <button class="btn btn-outline-danger mx-2" type="reset">Batal</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                <div class="card-body px-0 pb-2">
                    
                </div>
    </div>                 
<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAJY_RENTAL\resources\views/PromoCRUD/edit.blade.php ENDPATH**/ ?>