@extends('dashboard.dashboard')

@section('content')

<div class="container-fluid py-4" style="padding-left : 20%">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">

                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white mx-3 text-center">
                            <strong> EDIT DATA PEGAWAI UAJY RENTAL</strong> 
                        </h6>
                    </div>
                </div>

                <div class=" me-3 my-3 text-end">
                    <a class="btn bg-gradient-dark mb-0" href="{{ route('driver.index') }}"></i>Back</a>
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
                        <form action="{{ route('driver.update', $driver->id) }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                @method('PUT')
                        
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Nama Driver</label>
                                        <input type="text" class="form-control border border-2 p-2" value="{{ $driver->nama_driver }}" id="colFormLabel" name="nama_driver">
                                </div>
                    
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Alamat</label>
                                        <input type="text" class="form-control border border-2 p-2" value="{{ $driver->alamat_driver }}" id="colFormLabel" name="alamat_driver">
                                </div>
                    
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Tanggal Lahir</label>
                                        <input type="date" class="form-control border border-2 p-2" value="{{ $driver->tgl_lahir_driver }}" id="colFormLabel" name="tgl_lahir_driver">
                                </div>
                    
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Jenis Kelamin</label>
                                       <input type="text" class="form-control border border-2 p-2" value="{{ $driver->jenis_kelamin_driver }}" id="colFormLabel" name="jenis_kelamin_driver">
                                </div>
                    
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Email</label>
                                       <input type="email" class="form-control border border-2 p-2" value="{{ $driver->email_driver }}" id="colFormLabel" name="email_driver">
                                </div>
                    
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Nomor Telepon</label>
                                        <input type="text" class="form-control border border-2 p-2" value="{{ $driver->no_telp_driver }}" id="colFormLabel" name="no_telp_driver">
                                </div>     
                                
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Status</label>
                                        <input type="text" class="form-control border border-2 p-2" value="{{ $driver->status_tersedia_driver }}" id="colFormLabel" name="status_tersedia_driver">
                                </div>  
                    
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Bahasa</label>
                                        <input type="text" class="form-control border border-2 p-2" value="{{ $driver->bahasa }}" id="colFormLabel" name="bahasa">
                                 </div> 
                                
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">Password</label>
                                     <input type="text" class="form-control border border-2 p-2" value="{{ $driver->password_driver }}" id="colFormLabel" name="password_driver">
                                 </div> 
                    
                                <div class="mb-3 col-md-6">
                                    <label class="mb-2">File PDF</label>
                                    <input type="file" class="form-control border border-2 p-2" id="colFormLabel" name="file_pdf">
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

