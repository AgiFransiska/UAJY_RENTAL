

<?php $__env->startSection('content'); ?>
    
<div class="container-fluid py-4" style="padding-left : 20%">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">

                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white mx-3 text-center">
                            <strong> DATA PROMO UAJY RENTAL</strong> 
                        </h6>
                    </div>
                </div>

                <div class=" me-3 my-3 text-end">
                    <a class="btn bg-gradient-dark mb-0" href="<?php echo e(route('promo.create')); ?>"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New User</a>
                </div>
        
                <div class="card-body px-0 pb-2">     
                    <table class="table table-bordered">
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Kode Promo</th>
                            <th class="text-center">Diskon</th>
                            <th class="text-center">Action</th>
                        </tr>
                
                        <?php if(count($promo)): ?>
                        <?php $__currentLoopData = $promo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                        <tr>
                            <td class="text-center"><?php echo e($pro->id); ?></td>
                            <td class="text-center"><?php echo e($pro->kode_promo); ?></td>
                            <th class="text-center"><?php echo e($pro->diskon); ?></th>
                
                            <td class="text-center">
                                <form action="<?php echo e(route('promo.destroy', $pro->id)); ?>" method="POST">
                                    <a class="btn btn-info btn-sm" href="<?php echo e(route('promo.show',$pro->id)); ?>"><i class="material-icons" style="font-size: 20px">remove_red_eye</i></a>
                                    <a class="btn btn-primary btn-sm" href="<?php echo e(route('promo.edit',$pro->id)); ?>"><i class="material-icons" style="font-size: 20px">mode_edit</i></a>
                                    
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?'"><i class="material-icons" style="font-size: 20px">delete</i></button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <tr>
                            <td align="center" clospan="3">Empty Data!! Have a Nice Day & #0411</td>
                        </tr>
                    <?php endif; ?>    
                    </table>
                </div>
            </div>                    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Customer.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAJY_RENTAL\resources\views/Customer/PromoCRUD/index.blade.php ENDPATH**/ ?>