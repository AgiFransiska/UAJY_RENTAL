@extends('dashboard.dashboard')

@section('content')

<div class="container-fluid py-4" style="padding-left : 20%">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">

                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white mx-3 text-center">
                            <strong> EDIT DATA MITRA UAJY RENTAL</strong> 
                        </h6>
                    </div>
                </div>

                <div class=" me-3 my-3 text-end">
                    <a class="btn bg-gradient-dark mb-0" href="{{ route('schedule.index') }}"></i>Back</a>
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
                        <form action="{{ route('schedule.update', $schedule->id) }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                @method('PUT')
                        
                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Hari</label>
                                            <input type="text" class="form-control border border-2 p-2" value="{{ $schedule->hari }}" name="hari">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">Sesi</label>
                                            <input type="text" class="form-control border border-2 p-2" value="{{ $schedule->id_jadwal }}" name="id_jadwal">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="mb-2">ID</label>
                                            <input type="text" class="form-control border border-2 p-2" value="{{ $schedule->id_pegawai }}" name="id_pegawai">
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

