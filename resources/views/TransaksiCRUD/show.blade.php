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
                        <h6 class="mb-3">Transaksi Information</h6>
                    </div>
                </div>
            </div>

           
                <div class="mb-3 col-md-6">
                    <span class="ms-1">ID Customer</span>
                        <span  class="ms-1 form-control" >{{ $transaksi->id_customer }}</span>
                </div>

                <div class="mb-3 col-md-6">
                    <span class="ms-1">KTP Customer</span>
                    <span  class="ms-1 form-control" >{{ $transaksi->no_ktp }}</span>
                </div>
       

           
                <div class="mb-3 col-md-6">
                    <span class="ms-1">SIM Customer</span>
                    <span  class="ms-1 form-control" >{{ $transaksi->no_sim }}</span>
                </div>

                <div class="mb-3 col-md-6">
                    <span class="ms-1">Tanggal Transaksi</span>
                    <span  class="ms-1 form-control" >{{ $transaksi->tanggal_transaksi }}</span>
                </div>
       
                <div class="mb-3 col-md-6">
                    <span class="ms-1">Tanggal Transaksi</span>
                    <span  class="ms-1 form-control" >{{ $transaksi->tgl_transaksi }}</span>
                </div>
       

            
                <div class="mb-3 col-md-6">
                    <span class="ms-1">SIM Customer</span>
                    <span  class="ms-1 form-control" >{{ $transaksi->sim_customer }}</span>
                </div>

                <div class="mb-3 col-md-6">
                    <span class="ms-1">Tanggal Transaksi</span>
                    <span  class="ms-1 form-control" >{{ $transaksi->tanggal_transaksi }}</span>
                </div>
      

         
                <div class="mb-3 col-md-6">
                    <span class="ms-1">Waktu Mulai</span>
                    <span  class="ms-1 form-control" >{{ $transaksi->tanggal_mulai_sewa }}</span>
                </div>

                <div class="mb-3 col-md-6">
                    <span class="ms-1">Waktu Selesai</span>
                    <span  class="ms-1 form-control" >{{ $transaksi->tanggal_akhir_sewa }}</span>
                </div>
     

            {{-- <div class="row">
                <div class="mb-3 col-md-6">
                    <span class="ms-1">Id Kendaraan</span>
                    <span  class="ms-1 form-control" disabled value="{{ $transaksi->id_kendaraan }}">
                </div> --}}

                <div class="mb-3 col-md-6">
                    <span class="ms-1">ID Driver</span>
                    <span  class="ms-1 form-control" >{{ $transaksi->id_driver }}</span>
                </div>
          

           
                <div class="mb-3 col-md-6">
                    <span class="ms-1">Metode Pembayaran</span>
                    <span  class="ms-1 form-control" >{{ $transaksi->metode_pembayaran }}</span>
                </div>
                
                <div class="mb-3 col-md-6">
                    <span class="ms-1">Total Biaya Sewa</span>
                    <span  class="ms-1 form-control" >{{ $transaksi->total_biaya_sewa }}</span>
                </div>
      

    
                <div class="mb-3 col-md-6">
                    <span class="ms-1">Ekstensi Biaya</span>
                    <span  class="ms-1 form-control" >{{ $transaksi->ekstensi_biaya }}</span>
                </div>

                <div class="mb-3 col-md-6">
                    <span class="ms-1">Promo</span>
                    <span  class="ms-1 form-control" >{{ $transaksi->kode_promo }}</span>
                </div>

        
                <div class="mb-3 col-md-6">
                    <span class="ms-1">Status Transaksi</span>
                    <span  class="ms-1 form-control" >{{ $transaksi->status_transaksi }}</span>
                </div>

                <div class="mb-3 col-md-6">
                    <span class="ms-1">Status Verifikasi</span>
                    <span  class="ms-1 form-control" >{{ $transaksi->status_verifikasi }}</span>
                </div>
    

          
                <div class="mb-3 col-md-6">
                    <span class="ms-1">Rating Driver</span>
                    <span  class="ms-1 form-control" >{{ $transaksi->rating_driver }}</span>
                </div>

                <div class="mb-3 col-md-6">
                    <span class="ms-1">Id Pegawai</span>
                    <span class="ms-1 form-control">{{ $transaksi->id_pegawai }}</span>
                </div>

                <div class=" me-3 my-3">
                    <a class="btn bg-gradient-dark mb-0" href="{{ route('transaksi.index') }}"></i>Back</a>
                </div>
        
        </div>
    </div>
</div>
      
@endsection