@extends('dashboard.dashboard')
@section('content')

    <div class="container-fluid py-4" style="padding-left : 20%">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white mx-3 text-center">
                                <strong> DATA MITRA UAJY RENTAL</strong> 
                            </h6>
                        </div>
                    </div>

                    <div class=" me-3 my-3 text-end">
                        <a class="btn bg-gradient-dark mb-0" href="{{ route('mitra.create') }}"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New User</a>
                    </div>
                    
                    <form action="{{ route('mitra.index') }}" method="GET">
                        <div class="mb-3 col-md-6 position-relative mt-n4 mx-3 z-index-2">
                            <div class="input-group input-group-outline">
                                <label class="form-label">Type here...</label>
                                    <input type="search" class="form-control" name="search">
                            </div>
                        </div>
                    </form>

                    <div class="card-body px-0 pb-2">
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Nama Mitra</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Action</th>
                            </tr>
            
                    @if(count($mitra))
                    @foreach($mitra as $mit)
            
                            <tr>
                                <td class="text-center">{{ $mit->id }}</td>
                                <td class="text-center">{{ $mit->nama_mitra }}</td>
                                <td class="text-center">{{ $mit->alamat_mitra }}</td>
                                <td class="text-center">
                                    <form action="{{ route('mitra.destroy', $mit->id) }}" method="POST">
                                        <a class="btn btn-info btn-sm" href="{{ route('mitra.show',$mit->id) }}"><i class="material-icons" style="font-size: 20px">remove_red_eye</i></a>
                                        <a class="btn btn-primary btn-sm" href="{{ route('mitra.edit',$mit->id) }}"><i class="material-icons" style="font-size: 20px">mode_edit</i></a>
                                        
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