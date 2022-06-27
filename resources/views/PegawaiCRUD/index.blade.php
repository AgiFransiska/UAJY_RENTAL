@extends('dashboard.dashboard')
@section('content')

    <div class="container-fluid py-4" style="padding-left : 20%">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white mx-3 text-center">
                                <strong> DATA PEGAWAI UAJY RENTAL</strong> 
                            </h6>
                        </div>
                    </div>
                    
                            <div class="me-3 my-3 text-end">
                                <a class="btn bg-gradient-dark mb-0" href="{{ route('pegawai.create') }}"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New User</a>
                            </div>

                            <form action="{{ route('pegawai.index') }}" method="GET">
                                <div class="mb-3 col-md-6 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="input-group input-group-outline">
                                        <label class="form-label">Type here...</label>
                                            <input type="search" class="form-control" name="search">
                                    </div>
                                </div>
                            </form>

                            {{-- <form action="{{ route('data-mitra.index') }}" method="GET" class="float-end">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-white" id="basic-addon1">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </span>
                                    <input type="search" name="search" class="form-control" placeholder="cari.." aria-label="search" aria-describedby="basic-addon1">
                                </div>
                            </form> --}}


                                    
                    <div class="card-body px-0 pb-2 position-relative mt-n4 mx-3 z-index-2">
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Role</th>
                                <th class="text-center">Nama Pegawai</th>
                                <th class="text-center">Email Pegawai</th>
                                <th class="text-center">Action</th>
                            </tr>
            
                    @if(count($pegawai))
                    @foreach($pegawai as $pgw)
            
                            <tr>
                                <td class="text-center">{{ $pgw->id }}</td>
                                @if (count($role))
                                    @foreach ($role as $data)
                                        @if($pgw->id_role == $data->id)
                                        <td class="text-center">{{ $data->nama_role }}</td>
                                    @endif
                                    @endforeach
                                    @endif
                                <td class="text-center">{{ $pgw->nama_pegawai }}</td>
                                <td class="text-center">{{ $pgw->email }}</td>
                                <td class="text-center">
                                    <form action="{{ route('pegawai.destroy', $pgw->id) }}" method="POST">
                                        <a class="btn btn-info btn-sm" href="{{ route('pegawai.show',$pgw->id) }}"><i class="material-icons" style="font-size: 20px">remove_red_eye</i></a>
                                        <a class="btn btn-primary btn-sm" href="{{ route('pegawai.edit',$pgw->id) }}"><i class="material-icons" style="font-size: 20px">mode_edit</i></a>
                                        
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?'"><i class="material-icons" style="font-size: 20px">delete</i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td align="center" clospan="3">Empty Data!! Have a Nice Day & #0411</td>
                            </tr>
                            @endif    
                        </table>
                    </div>
                </div>                                           
@endsection