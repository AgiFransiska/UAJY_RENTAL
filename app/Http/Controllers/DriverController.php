<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->has('search')){
            $driver = Driver::where( 'nama_driver','LIKE','%' .$request->search. '%' )->paginate(5);
        }else{
            /* $data = Pegawai::paginate(5); */
            $driver = Driver::paginate(5);
        } 
        
        return view ('DriverCRUD.index', ['driver' => $driver]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('DriverCRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $driver = Driver::create([
            'nama_driver' => $request->nama_driver,
            'alamat_driver' => $request->alamat_driver,
            'tgl_lahir_driver' => $request->tgl_lahir_driver,
            'jenis_kelamin_driver' => $request->jenis_kelamin_driver,
            'no_telp_driver' => $request->no_telp_driver,
            'email_driver' => $request->email_driver,
            'password_driver' => $request->password_driver,
            'status_tersedia_driver' => $request->status_tersedia_driver,
            'bahasa' => $request->bahasa,
            'file_pdf' => $request->file_pdf
        ]);

        $driver->save();
        return redirect()->route('driver.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $driver = Driver::where('id', $id)->first();

        return view('DriverCRUD.show', ['driver' => $driver]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $driver = Driver::find($id);

        return view('DriverCRUD.edit', ['driver' => $driver]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $driver = Driver::find($id);
        $driver->nama_driver = $request->nama_driver;
        $driver->alamat_driver = $request->alamat_driver;
        $driver->tgl_lahir_driver = $request->tgl_lahir_driver;
        $driver->jenis_kelamin_driver = $request->jenis_kelamin_driver;
        $driver->no_telp_driver = $request->no_telp_driver;
        $driver->email_driver = $request->email_driver;
        $driver->status_tersedia_driver = $request->status_tersedia_driver;
        $driver->bahasa = $request->bahasa;

        $driver->save();
        return redirect()->route('driver.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $driver = Driver::find($id);
        
        $driver->delete();

        return redirect()->route('driver.index');
    }
}
