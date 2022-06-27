@extends('dashboard.dashboard')

@section('content')

<div class="container-fluid py-4" style="padding-left : 20%">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">

                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white mx-3 text-center">
                            <strong> TRANSAKSI UAJY RENTAL</strong> 
                        </h6>
                    </div>
                </div>

                <div class=" me-3 my-3 text-end">
                    <a class="btn bg-gradient-dark mb-0" href="{{ route('transaksi.index') }}"></i>Back</a>
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
                        <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                            
                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Id Pegawai</label>
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="id_pegawai" required>
                                </div>

                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Id Customer</label>
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="id_customer" required>
                                </div>

                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Id Aset</label>
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="id_aset" required>
                                </div>

                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Id Driver</label>
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="id_driver" required>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">No KTP</label>
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="no_ktp" required>
                                </div>

                                {{-- <div class="mb-3 col-md-6">  
                                    <label class="form-label">Nama</label>                               
                                    <select name="id_role" class="form-control border border-2 p-2">
                                        <option value="">- Pilih -</option>
                                        @foreach ($role as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_role }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">No SIM</label>
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="no_sim" required>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tanggal Transaksi</label>
                                        <input type="date" class="form-control border border-2 p-2" id="colFormLabel" name="tanggal_transaksi">
                                </div>

                               <div class="mb-3 col-md-6">
                                    <label class="form-label">Tanggal Mulai Sewa</label>
                                        <input type="date" class="form-control border border-2 p-2" id="colFormLabel" name="tanggal_mulai_sewa">
                                </div> 

                         {{--    RADIO BUTTON --}}
                               {{--  <div class="form-group mb-3 col-md-6">
                                    @if(pegawai->jenis_kelamin_pegawai == "L")
                                    <label for="jenis_kelamin">Jenis Kelamin :</label> <br>
                                        <div class="form-check form-check-inline">
                                            <label for="jenis_kelamin">
                                                <input class="form-control border border-2 p-2" type="radio" name="jenis_kelamin_pegawai" value="L" id="colFormLabel" {{$pegawai->jenis_kelamin_pegawai == 'L'? 'checked' : ''}} >Laki-Laki
                                                <input class="form-control border border-2 p-2" type="radio" name="jenis_kelamin_pegawai" value="P" id="colFormLabel" {{$pegawai->jenis_kelamin_pegawai == 'P'? 'checked' : ''}} >Perempuan
                                            </label>
                                        </div>
                                        @elseif(pegawai->jenis_kelamin_pegawai == "P")
                                        <label for="jenis_kelamin">Jenis Kelamin :</label> <br>
                                        <div class="form-check form-check-inline">
                                            <label for="jenis_kelamin">
                                                <input class="form-control border border-2 p-2" type="radio" name="jenis_kelamin_pegawai" value="L" id="colFormLabel" {{$pegawai->jenis_kelamin_pegawai == 'L'? 'checked' : ''}} >Laki-Laki
                                                <input class="form-control border border-2 p-2" type="radio" name="jenis_kelamin_pegawai" value="P" id="colFormLabel" {{$pegawai->jenis_kelamin_pegawai == 'P'? 'checked' : ''}} >Perempuan
                                            </label>
                                        </div>
                                </div> --}}

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tanggal Akhir Sewa</label>
                                        <input type="date" class="form-control border border-2 p-2" id="colFormLabel" name="tanggal_akhir_sewa">
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Metode Pembayaran</label>
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="metode_pembayaran">
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Status Transaksi</label>
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="status_transaksi">
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Status Verifikasi</label>
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="status_verifikasi">
                                </div>



                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Total Biaya</label>
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="total_biaya_sewa" required>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Extensi</label>
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="ekstensi_biaya" required>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Rating Driver</label>
                                        <input type="number" class="form-control border border-2 p-2" id="colFormLabel" name="rating_driver" required>
                                </div>

                                {{-- <div class="mb-3 col-md-8">
                                    <label for="formfile" class="form-label">Total Biaya Sewa</label>
                                        <input type="" class="form-control border border-2 p-2" id="formFile" name="foto_pegawai">
                                </div> --}}

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Promo</label>
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="kode_promo">
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Jenis Transaksi</label>
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="jenis_transaksi">
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
