


<?php $__env->startSection('content'); ?>

<div class="container-fluid py-4" style="padding-left : 20%">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">

                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white mx-3 text-center">
                            <strong> EDIT DATA KENDARAAN UAJY RENTAL</strong> 
                        </h6>
                    </div>
                </div>

                <div class=" me-3 my-3 text-end">
                    <a class="btn bg-gradient-dark mb-0" href="<?php echo e(route('kendaraan.index')); ?>"></i>Back</a>
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
                        <form action="<?php echo e(route('kendaraan.update', $aset_kendaraan->id)); ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Nama Mobil</label>
                                    <input type="text" class="form-control border border-2 p-2" value="<?php echo e($aset_kendaraan->nama_mobil); ?>" name="nama_mobil">
                                </div>
            
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Tipe Mobil</label>
                                <input type="text" class="form-control border border-2 p-2" value="<?php echo e($aset_kendaraan->tipe_mobil); ?>" name="tipe_mobil">
                                </div>
        
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Jenis Transmisi</label>
                                    <input type="text" class="form-control border border-2 p-2" value="<?php echo e($aset_kendaraan->jenis_transmisi); ?>" name="jenis_transmisi">
                                </div>
        
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Jenis Bahan Bakar</label>
                                    <input type="text" class="form-control border border-2 p-2" value="<?php echo e($aset_kendaraan->jenis_bahan_bakar); ?>" name="jenis_bahan_bakar">
                                </div>
        
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Volume Bahan Bakar</label>
                                    <input type="text" class="form-control border border-2 p-2" value="<?php echo e($aset_kendaraan->volume_bahan_bakar); ?>" name="volume_bahan_bakar">
                                </div> 
        
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Warna Mobil</label>
                                    <input type="text" class="form-control border border-2 p-2" value="<?php echo e($aset_kendaraan->warna_mobil); ?>" name="warna_mobil">
                                </div>
                                
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Kapasitas Mobil</label>
                                <input type="text" class="form-control border border-2 p-2" value="<?php echo e($aset_kendaraan->kapasitas_mobil); ?>" name="kapasitas_mobil">
                                </div>
        
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Fasilitas Mobil</label>
                                <input type="text" class="form-control border border-2 p-2" value="<?php echo e($aset_kendaraan->fasilitas_mobil); ?>" name="fasilitas_mobil">
                                </div>
        
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Plat Nomor</label>
                                <input type="text" class="form-control border border-2 p-2" value="<?php echo e($aset_kendaraan->plat_nomor); ?>" name="plat_nomor">
                                </div>
        
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Nomor STNK</label>
                                <input type="text" class="form-control border border-2 p-2" value="<?php echo e($aset_kendaraan->no_stnk); ?>" name="no_stnk">
                                </div>
        
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Kategori Aset</label>
                                <input type="text" class="form-control border border-2 p-2" value="<?php echo e($aset_kendaraan->kategori_aset); ?>" name="kategori_aset">
                                </div>
        
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Terakhir Service</label>
                                <input type="date" class="form-control border border-2 p-2" value="<?php echo e($aset_kendaraan->tgl_service_terakhir); ?>" name="tgl_service_terakhir">
                                </div>
        
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Status Ketersediaan Mobil</label>
                                <input type="text" class="form-control border border-2 p-2" value="<?php echo e($aset_kendaraan->status_ketersediaan_mobil); ?>" name="status_ketersediaan_mobil">
                                </div>
        
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Biaya Sewa</label>
                                <input type="text" class="form-control border border-2 p-2" value="<?php echo e($aset_kendaraan->biaya_sewa); ?>" name="biaya_sewa">
                                </div>
                                        
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-outline-primary mx-2" type="submit">Ubah</button>
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



<?php echo $__env->make('dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\UAJY_RENTAL\resources\views/KendaraanCRUD/edit.blade.php ENDPATH**/ ?>