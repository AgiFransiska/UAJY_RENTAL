<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Pegawai;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Kendaraan;

class TransaksiController extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->has('search')){
            $transaksi = Transaksi::where( 'hari','LIKE','%' .$request->search. '%' )->paginate(5);
        }else{
            /* $data = Pegawai::paginate(5); */
            $transaksi = Transaksi::paginate(5);
        } 
        $driver = Driver::All();
        $pegawai = Pegawai::All();
        $customer = Customer::All();
        $kendaraan = Kendaraan::All();
        return view ('TransaksiCRUD.index', compact ('transaksi', 'driver', 'pegawai','customer', 'kendaraan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $driver = Driver::All();
        $pegawai = Pegawai::All();
        $customer = Customer::All();
        $kendaraan = Kendaraan::All();
        $transaksi = Transaksi::All();
        return view('TransaksiCRUD.create', compact ('transaksi','pegawai','driver','customer','kendaraan'));
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
        $transaksi = Transaksi::create([
            'id_pegawai' => $request->id_pegawai,
            'id_customer' => $request->id_customer,
            'id_aset' => $request->id_aset,
            'id_driver' => $request->id_driver,
            'no_ktp' => $request->no_ktp,
            'no_sim' => $request->no_sim,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'tanggal_mulai_sewa' => $request->tanggal_mulai_sewa,
            'tanggal_akhir_sewa' => $request->tanggal_akhir_sewa,
            'metode_pembayaran' => $request->metode_pembayaran,
            'ekstensi_biaya' => $request->ekstensi_biaya,
            'total_biaya_sewa' => $request->total_biaya_sewa,
            'status_transaksi' => $request->status_transaksi,
            'status_verifikasi' => $request->status_verifikasi,
            'rating_driver' => $request->rating_driver,
            'kode_promo' => $request->kode_promo,
            'jenis_transaksi' => $request->jenis_transaksi
            
        ]);

        $transaksi->save();
        return redirect()->route('transaksi.index');
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
        $transaksi = Transaksi::where('id', $id)->first();

        return view('TransaksiCRUD.show', ['transaksi' => $transaksi]);
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
        $transaksi = Transaksi::find($id);

        return view('TransaksiCRUD.edit', ['transaksi' => $transaksi]);
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
        $transaksi = Transaksi::find($id);
            $transaksi->id_pegawai = $request->id_pegawai;
            $transaksi->id_customer = $request->id_customer;
            $transaksi->id_aset = $request->id_aset;
            $transaksi->id_driver = $request->id_driver;
            
            $transaksi->no_ktp = $request->no_ktp;
            $transaksi->no_sim = $request->no_sim;
            $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
            $transaksi->tanggal_mulai_sewa = $request->tanggal_mulai_sewa;
            $transaksi->tanggal_akhir_sewa = $request->tanggal_akhir_sewa;
            $transaksi->metode_pembayaran = $request->metode_pembayaran;
            $transaksi->ekstensi_biaya = $request->ekstensi_biaya;
            $transaksi->total_biaya_sewa = $request->total_biaya_sewa;
            $transaksi->status_transaksi = $request->status_transaksi;
            $transaksi->status_verifikasi = $request->status_verifikasi;
            $transaksi->rating_driver = $request->rating_driver;
            $transaksi->kode_promo = $request->kode_promo;
            $transaksi->jenis_transaksi = $request->jenis_transaksi;
    

        $transaksi->save();
        return redirect()->route('transaksi.index');
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
        $transaksi = Transaksi::find($id);

        $transaksi->delete();

        return redirect()->route('transaksi.index');
    }


}
