@extends('dashboard.dashboard')

@section('content')

<div class="container-fluid py-4" style="padding-left : 20%">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">

                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white mx-3 text-center">
                            <strong> EDIT DATA TRANSAKSI UAJY RENTAL</strong> 
                        </h6>
                    </div>
                </div>

                <div class=" me-3 my-3 text-end">
                    <a class="btn bg-gradient-dark mb-0" href="{{ route('transaksi.index') }}"></i>Back</a>
                </div>

                <div class="card card-plain h-100">
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
                        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                @method('PUT')
                              
                                    <div class="mb-3 col-md-6">
                                        <label class="mb-2">ID Customer</label>
                                        <input type="text" class="form-control border border-2 p-2"  value="{{ $transaksi->id_customer }}" id="colFormLabel" name="id_customer">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="mb-2">KTP Customer</label>
                                        <input type="text" class="form-control border border-2 p-2"  value="{{ $transaksi->no_ktp }}" id="colFormLabel" name="no_ktp">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="mb-2">SIM Customer</label>
                                        <input type="text" class="form-control border border-2 p-2"  value="{{ $transaksi->no_sim }}" id="colFormLabel" name="no_sim">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="mb-2">Tanggal Transaksi</label>
                                        <input type="date" class="form-control border border-2 p-2"  value="{{ $transaksi->tanggal_transaksi }}" id="colFormLabel" name="tanggal_transaksi">
                                    </div>
            
                            
                                    <div class="mb-3 col-md-6">
                                        <label class="mb-2">Waktu Mulai</label>
                                        <input type="date" class="form-control border border-2 p-2"  value="{{ $transaksi->tanggal_mulai_sewa }}" id="colFormLabel" name="tanggal_mulai_sewa">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="mb-2">Waktu Selesai</label>
                                        <input type="date" class="form-control border border-2 p-2"  value="{{ $transaksi->tanggal_akhir_sewa }}" id="colFormLabel" name="tanggal_akhir_sewa">
                                    </div>
                                
            
                                
                                   {{--  <div class="mb-3 col-md-6">
                                        <label class="mb-2">Id Kendaraan</label>
                                        <input type="text" class="form-control border border-2 p-2"  value="{{ $transaksi->id_kendaraan }}">
                                    </div> --}}

                                    <div class="mb-3 col-md-6">
                                        <label class="mb-2">ID Driver</label>
                                        <input type="text" class="form-control border border-2 p-2"  value="{{ $transaksi->id_driver }}" id="colFormLabel" name="id_driver">
                                    </div>
                             
            
                               
                                    <div class="mb-3 col-md-6">
                                        <label class="mb-2">Metode Pembayaran</label>
                                        <input type="text" class="form-control border border-2 p-2"  value="{{ $transaksi->metode_pembayaran }}" id="colFormLabel" name="metode_pembayaran">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="mb-2">Total Biaya Sewa</label>
                                        <input type="text" class="form-control border border-2 p-2"  value="{{ $transaksi->total_biaya_sewa }}" id="colFormLabel" name="total_biaya_sewa">
                                    </div>
                          
            
                          
                                    <div class="mb-3 col-md-6">
                                        <label class="mb-2">Ekstensi Biaya</label>
                                        <input type="text" class="form-control border border-2 p-2"  value="{{ $transaksi->ekstensi_biaya }}" id="colFormLabel" name="ekstensi_biaya">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="mb-2">Promo</label>
                                        <input type="text" class="form-control border border-2 p-2"  value="{{ $transaksi->kode_promo }}" id="colFormLabel" name="kode_promo">
                                    </div>
                          
            
                                
                                    <div class="mb-3 col-md-6">
                                        <label class="mb-2">Status Transaksi</label>
                                        <input type="text" class="form-control border border-2 p-2"  value="{{ $transaksi->status_transaksi }}" id="colFormLabel" name="status_transaksi">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="mb-2">Status Verifikasi</label>
                                        <input type="text" class="form-control border border-2 p-2"  value="{{ $transaksi->status_verifikasi }}" id="colFormLabel" name="status_verifikasi">
                                    </div>
                         
            
                              
                                    <div class="mb-3 col-md-6">
                                        <label class="mb-2">Rating Driver</label>
                                        <input type="text" class="form-control border border-2 p-2"  value="{{ $transaksi->rating_driver }}" id="colFormLabel" name="rating_driver">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="mb-2">Id Pegawai</label>
                                        <input type="text" class="form-control border border-2 p-2"  value="{{ $transaksi->id_pegawai }}" id="colFormLabel" name="id_pegawai">
                                    </div>

                                    
                                    <div class="mb-3 col-md-6">
                                        <label class="mb-2">Jenis Transaksi</label>
                                        <input type="text" class="form-control border border-2 p-2"  value="{{ $transaksi->jenis_transaksi }}" id="colFormLabel" name="jenis_transaksi">
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
@endsection

