@extends('dashboard.dashboard')

@section('content')

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
                        <h6 class="mb-3">Car Information</h6>
                    </div>
                </div>
            </div>

            <div class="mb-3 col-md-6">
                <span class="ms-1">ID Mobil</span>
                <span class="ms-1 form-control">{{ $aset_kendaraan->id}}</span>    
            </div>
            
            
            <div class="mb-3 col-md-6">
                <span class="ms-1">Nama Mobil</span>
                <span class="ms-1 form-control">{{ $aset_kendaraan->nama_mobil}}</span>    
            </div>
            
            
            <div class="mb-3 col-md-6">
                <span class="ms-1">Tipe Mobil</span>
                <span class="ms-1 form-control">{{ $aset_kendaraan->tipe_mobil}}</span>    
            </div>
            
            
            <div class="mb-3 col-md-6">
                <span class="ms-1">Jenis Transmisi</span>
                <span class="ms-1 form-control">{{ $aset_kendaraan->jenis_transmisi}}</span>    
            </div>
            
            
            <div class="mb-3 col-md-6">
                <span class="ms-1">Jenis Bahan Bakar</span>
                <span class="ms-1 form-control">{{ $aset_kendaraan->jenis_bahan_bakar}}</span>    
            </div>
            
            
            <div class="mb-3 col-md-6">
                <span class="ms-1">Volume Bahan Bakar</span>
                <span class="ms-1 form-control">{{ $aset_kendaraan->volume_bahan_bakar}}</span>    
            </div>
            
            
            <div class="mb-3 col-md-6">
                <span class="ms-1">Warna Mobil</span>
                <span class="ms-1 form-control">{{ $aset_kendaraan->warna_mobil}}</span>    
            </div>
            
            
            <div class="mb-3 col-md-6">
                <span class="ms-1">Kapasitas Mobil</span>
                <span class="ms-1 form-control">{{ $aset_kendaraan->kapasitas_mobil}}</span>    
            </div>
            
            
            <div class="mb-3 col-md-6">
                <span class="ms-1">Fasilitas Mobil</span>
                <span class="ms-1 form-control">{{ $aset_kendaraan->fasilitas_mobil}}</span>    
            </div>
            
            
            <div class="mb-3 col-md-6">
                <span class="ms-1">Plat Nomor</span>
                <span class="ms-1 form-control">{{ $aset_kendaraan->plat_nomor}}</span>    
            </div>
            
            
            <div class="mb-3 col-md-6">
                <span class="ms-1">Nomor STNK</span>
                <span class="ms-1 form-control">{{ $aset_kendaraan->no_stnk}}</span>    
            </div>
            
            
            <div class="mb-3 col-md-6">
                <span class="ms-1">Kategori Aset</span>
                <span class="ms-1 form-control">{{ $aset_kendaraan->kategori_aset}}</span>    
            </div>
            
            
            <div class="mb-3 col-md-6">
                <span class="ms-1">Tanggal Service Terakhir</span>
                <span class="ms-1 form-control">{{ $aset_kendaraan->tgl_service_terakhir}}</span>    
            </div>
            
            
            <div class="mb-3 col-md-6">
                <span class="ms-1">Status Mobil</span>
                <span class="ms-1 form-control">{{ $aset_kendaraan->status_ketersediaan_mobil}}</span>    
            </div>
            
            
            <div class="mb-3 col-md-6">
                <span class="ms-1">Biaya Sewa</span>
                <span class="ms-1 form-control">{{ $aset_kendaraan->biaya_sewa}}</span>    
            </div>

            <div class=" me-3 my-3">
                <a class="btn bg-gradient-dark mb-0" href="{{ route('kendaraan.index') }}"></i>Back</a>
            </div>
        </div>
    </div>
</div>
      
@endsection