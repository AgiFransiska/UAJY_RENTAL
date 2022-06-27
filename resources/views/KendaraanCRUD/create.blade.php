@extends('dashboard.dashboard')

@section('content')

<div class="container-fluid py-4" style="padding-left : 20%">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">

                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white mx-3 text-center">
                            <strong> TAMBAH DATA KENDARAAN UAJY RENTAL</strong> 
                        </h6>
                    </div>
                </div>

                <div class=" me-3 my-3 text-end">
                    <a class="btn bg-gradient-dark mb-0" href="{{ route('kendaraan.index') }}"></i>Back</a>
                </div>

                <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-3">Profile Information</h6>
                            </div>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger" >
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $errors)
                                        <li>{{ $errors }}</li>
                                    @endforeach
                                </ul>
                        </div>
                    @endif

                    <div class="card-body p-3">
                        <form action="{{ route('kendaraan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nama Mobil</label>
                                         <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="nama_mobil" required>
                               </div>
                               
                               
                               <div class="mb-3 col-md-6">
                                    <label class="form-label">Tipe Mobil</label>
                                         <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="tipe_mobil" required>
                               </div>
                               
                               
                               <div class="mb-3 col-md-6">
                                    <label class="form-label">Jenis Transmisi</label>
                                         <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="jenis_transmisi" required>
                               </div>
                               
                               
                               <div class="mb-3 col-md-6">
                                    <label class="form-label">Jenis Bahan Bakar</label>
                                         <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="jenis_bahan_bakar" required>
                               </div>
                               
                               
                               <div class="mb-3 col-md-6">
                                    <label class="form-label">Volume Bahan Bakar</label>
                                         <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="volume_bahan_bakar" required>
                               </div>
                               
                               
                               <div class="mb-3 col-md-6">
                                    <label class="form-label">Warna Mobil</label>
                                         <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="warna_mobil" required>
                               </div>
                               
                               
                               <div class="mb-3 col-md-6">
                                    <label class="form-label">Kapasitas Mobil</label>
                                         <input type="number" class="form-control border border-2 p-2" id="colFormLabel" name="kapasitas_mobil" required>
                               </div>
                               
                               
                               <div class="mb-3 col-md-6">
                                    <label class="form-label">Fasilitas Mobil</label>
                                         <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="fasilitas_mobil" required>
                               </div>
                               
                               
                               <div class="mb-3 col-md-6">
                                    <label class="form-label">Plat Nomor</label>
                                         <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="plat_nomor" required>
                               </div>
                               
                               
                               <div class="mb-3 col-md-6">
                                    <label class="form-label">Nomor STNK</label>
                                         <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="no_stnk" required>
                               </div>
                               
                               
                               <div class="mb-3 col-md-6">
                                    <label class="form-label">Kategori Aset</label>
                                         <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="kategori_aset" required>
                               </div>
                               
                               
                               <div class="mb-3 col-md-6">
                                    <label class="form-label">Tanggal Service Terakhir</label>
                                         <input type="date" class="form-control border border-2 p-2" id="colFormLabel" name="tgl_service_terakhir" required>
                               </div>
                               
                               <div class="mb-3 col-md-6">
                                    <label class="form-label">Status</label>
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="status_ketersediaan_mobil" required>
                                </div>
                               
                               <div class="mb-3 col-md-6">
                                    <label class="form-label">Biaya Sewa</label>
                                         <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="biaya_sewa" required>
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
@endsection
