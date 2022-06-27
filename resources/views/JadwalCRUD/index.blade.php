@extends('dashboard.dashboard')
@section('content')

    <div class="container-fluid py-4" style="padding-left : 20%">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white mx-3 text-center">
                                <strong> JADWAL PEGAWAI </strong> 
                            </h6>
                        </div>
                    </div>

                    <div class=" me-3 my-3 text-end">
                        <a class="btn bg-gradient-dark mb-0" href="{{ route('schedule.create') }}"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New User</a>
                    </div>
                    
                    <form action="{{ route('schedule.index') }}" method="GET">
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
                                <th class="text-center"></th>
                                <th class="text-center">Hari</th>
                                <th class="text-center">Sesi</th>
                                <th class="text-center">Nama Pegawai</th>
                                <th class="text-center">Action</th>
                                
                            </tr>
            
                    @if(count($schedule))
                    @foreach($schedule as $sch)
            
                            <tr>
                                <td class="text-center">{{ $sch->id }}</td>
                               
                                <td class="text-center">{{ $sch->hari }}</td>
                                @if (count($jadwal))
                                    @foreach ($jadwal as $data)
                                        @if($sch->id_jadwal == $data->id)
                                        <td class="text-center">{{ $data->waktu }}</td>
                                    @endif
                                    @endforeach
                                    @endif

                                    @if (count($pegawai))
                                    @foreach ($pegawai as $data)
                                        @if($sch->id_pegawai == $data->id)
                                        <td class="text-center">{{ $data->nama_pegawai }}</td>
                                    @endif
                                    @endforeach
                                    @endif
                                    
                                <td class="text-center">
                                    <form action="{{ route('schedule.destroy', $sch->id) }}" method="POST">
                                        <a class="btn btn-info btn-sm" href="{{ route('schedule.show',$sch->id) }}"><i class="material-icons" style="font-size: 20px">remove_red_eye</i></a>
                                        <a class="btn btn-primary btn-sm" href="{{ route('schedule.edit',$sch->id) }}"><i class="material-icons" style="font-size: 20px">mode_edit</i></a>
                                        
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