<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;

class MitraController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      
        if($request->has('search')){
            $mitra = Mitra::where( 'nama_mitra','LIKE','%' .$request->search. '%' )->paginate(5);
        }else{
            /* $data = Pegawai::paginate(5); */
            $mitra = Mitra::paginate(5);
        } 

        // Mengirim Variabel $pegawai ke halaman view 
        return view ('MitraCRUD.index', ['mitra' => $mitra]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('MitraCRUD.create');
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
        $mitra = Mitra::create([

            'no_ktp' => $request->no_ktp,
            'nama_mitra' => $request->nama_mitra,
            'alamat_mitra' => $request->alamat_mitra,
            'no_telp_mitra' => $request->no_telp_mitra,
            'mulai_kontrak' => $request->mulai_kontrak,
            'akhir_kontrak' => $request->akhir_kontrak,

        ]);

        return redirect()->route('mitra.index');
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
        $mitra = Mitra::where('id', $id)->first();

        return view('MitraCRUD.show', ['mitra' => $mitra]);
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
        $mitra = Mitra::find($id);

        return view('MitraCRUD.edit', ['mitra' => $mitra]);
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
        $mitra = Mitra::find($id);
        $mitra->no_ktp = $request->no_ktp;
        $mitra->nama_mitra = $request->nama_mitra;
        $mitra->alamat_mitra = $request->alamat_mitra;
        $mitra->no_telp_mitra = $request->no_telp_mitra;
        $mitra->mulai_kontrak = $request->mulai_kontrak;
        $mitra->akhir_kontrak = $request->akhir_kontrak;
        $mitra->save();
        return redirect()->route('mitra.index');
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
       $mitra = Mitra::find($id);

        $mitra->delete();

        return redirect()->route('mitra.index');
    }
}
