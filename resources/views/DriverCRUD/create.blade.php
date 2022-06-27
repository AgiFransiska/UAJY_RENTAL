@extends('dashboard.dashboard')

@section('content')

<div class="container-fluid py-4" style="padding-left : 20%">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">

                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white mx-3 text-center">
                            <strong> TAMBAH DATA DRIVER UAJY RENTAL</strong> 
                        </h6>
                    </div>
                </div>

                <div class=" me-3 my-3 text-end">
                    <a class="btn bg-gradient-dark mb-0" href="{{ route('driver.index') }}"></i>Back</a>
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
                        <form action="{{ route('driver.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nama Driver</label>
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="nama_driver" required>
                                </div>
                    
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Alamat</label>
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="alamat_driver">
                                </div>
                    
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control border border-2 p-2" id="colFormLabel" name="tgl_lahir_driver">
                                </div>
                    
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jenis Kelamin</label>
                                    
                                        <input type="text" class="form-control border border-2 p-2" id="colFormLabel" name="jenis_kelamin_driver">
                                    
                                </div>
                    
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Email</label>
                                    
                                        <input type="email" class="form-control border border-2 p-2" id="colFormLabel" name="email_driver">
                                  
                                </div>
                    
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nomor Telepon</label>
                                    
                                        <input type="text" class="form-control border border-2 p-2 border border-2 p-2" id="colFormLabel" name="no_telp_driver">
                                   
                                </div>     
                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Status</label>
                                    
                                        <input type="text" class="form-control border border-2 p-2 border border-2 p-2" id="colFormLabel" name="status_tersedia_driver">
                                   
                                </div>  
                    
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Bahasa</label>
                                    
                                        <input type="text" class="form-control border border-2 p-2 border border-2 p-2" id="colFormLabel" name="bahasa">
                                    
                                </div> 
                                
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Password</label>
                                    
                                        <input type="text" class="form-control border border-2 p-2 border border-2 p-2" id="colFormLabel" name="password_driver">
                                  
                                </div> 
                    
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">File PDF</label>
                                    
                                        <input type="file" class="form-control border border-2 p-2 border border-2 p-2" id="colFormLabel" name="file_pdf">
                                    
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
