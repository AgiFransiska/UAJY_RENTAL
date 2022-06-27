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
                    <a class="btn bg-gradient-dark mb-0" href="{{ route('pegawai.index') }}"></i>Back</a>
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
                        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                @method('PUT')
                        
                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Nama</label>
                                            <input type="text" class="form-control border border-2 p-2" value="{{ $pegawai->nama_pegawai }}" name="nama_pegawai">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Tanggal Lahir</label>
                                            <input type="date" class="form-control border border-2 p-2" value="{{ $pegawai->tgl_lahir_pegawai }}" name="tgl_lahir_pegawai">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Jenis Kelamin</label>
                                            <input type="text" class="form-control border border-2 p-2" value="{{ $pegawai->jenis_kelamin_pegawai }}" name="jenis_kelamin_pegawai">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Nomor Telepon</label>
                                            <input type="text" class="form-control border border-2 p-2" value="{{ $pegawai->no_telp_pegawai }}" name="no_telp_pegawai">
                                        </div> 

                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Email</label>
                                            <input type="email" class="form-control border border-2 p-2" value="{{ $pegawai->email }}" name="email">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Alamat</label>
                                            <input type="text" class="form-control mb-3 border border-2 p-2" value="{{ $pegawai->alamat_pegawai }}" name="alamat_pegawai">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Role</label>
                                            <input type="number" class="form-control mb-3 border border-2 p-2"  value="{{ $pegawai->id_role }}" name="id_role">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Password</label>
                                            <input type="password" class="form-control mb-3 border border-2 p-2" value="{{ $pegawai->password_pegawai }}" name="password_pegawai">    
                                        </div>

                                        <div class="mb-3 col-md-12">
                                            <label for="formFile" class="col-sm-2 col-form-label">Foto</label>       
                                            <input class="form-control border border-2 p-2" type="file" id="formFile" name="foto_pegawai">    
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

