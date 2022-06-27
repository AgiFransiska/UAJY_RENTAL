
@extends('dashboard.dashboard')

@section('content')

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
                    <a class="btn bg-gradient-dark mb-0" href="{{ route('customer.index') }}"></i>Back</a>
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
                        <form action="{{ route('customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                @method('PUT')

                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Nama Lengkap</label>
                                            <input type="text" class="form-control border border-2 p-2" value="{{ $customer->nama_lengkap }}" name="nama_lengkap">
                                        </div>
                        
                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Tanggal Lahir</label>
                                            <input type="date" class="form-control border border-2 p-2" value="{{ $customer->tgl_lahir_customer }}" name="tgl_lahir_customer">
                                        </div>
                        
                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Jenis Kelamin</label>
                                            <input type="text" class="form-control border border-2 p-2" value="{{ $customer->jenis_kelamin_customer }}" name="jenis_kelamin_customer">
                                        </div>
                        
                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Nomor Telepon</label>
                                            <input type="text" class="form-control border border-2 p-2" value="{{ $customer->no_telp_customer }}" name="no_telp_customer">
                                        </div> 
                        
                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Email</label>
                                            <input type="email" class="form-control border border-2 p-2" value="{{ $customer->email_customer }}" name="email_customer">
                                        </div>
                                        
                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Alamat</label>
                                            <input type="text" class="form-control border border-2 p-2" value="{{ $customer->alamat_customer }}" name="alamat_customer">    
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Password</label>
                                            <input type="password" class="form-control border border-2 p-2" value="{{ $customer->password_customer }}" name="password_customer">    
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
@endsection