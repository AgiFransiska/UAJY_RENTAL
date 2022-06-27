<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Role;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if($request->has('search')){
            $pegawai = Pegawai::where( 'nama_pegawai','LIKE','%' .$request->search. '%' )->paginate(5);
        }else{
            /* $data = Pegawai::paginate(5); */
            $pegawai = Pegawai::paginate(5);
        } 
        $role = Role::all();
        /* if($request->has('search')){
            $mitra = Mitra::where('nama_pemilik', 'LIKE', '%'.$request->search.'%')->paginate(5);
        }else{
            $mitra = Mitra::paginate(5);
        } */

        // Mengirim Variabel $pegawai ke halaman view 
        return view ('PegawaiCRUD.index', compact ('pegawai','role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $role = Role::all();
        return view('PegawaiCRUD.create', compact ('role'));
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
        $pegawai = Pegawai::create([

            'nama_pegawai' => $request->nama_pegawai,
            'alamat_pegawai' => $request->alamat_pegawai,
            'tgl_lahir_pegawai' => $request->tgl_lahir_pegawai,
            'jenis_kelamin_pegawai' => $request->jenis_kelamin_pegawai,
            'email' => $request->email,
            'no_telp_pegawai' => $request->no_telp_pegawai,
            'password' => bcrypt($request->tgl_lahir_pegawai),
            'id_role' => $request->id_role,
            'foto_pegawai' => $request->file('foto_pegawai')

        ]);

        if($request->hasFile('foto_pegawai')){

            $request->file('foto_pegawai')->move('foto-pegawai/', $request->file('foto_pegawai')->getClientOriginalName());

            $pegawai->foto_pegawai = $request->file('foto_pegawai')->getClientOriginalName();

            $pegawai->save();

        }

        return redirect()->route('pegawai.index');
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
        $pegawai = Pegawai::where('id', $id)->first();

        return view('PegawaiCRUD.show', compact ('pegawai'));
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
        $pegawai = Pegawai::find($id);

        return view('PegawaiCRUD.edit', ['pegawai' => $pegawai]);
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
        $pegawai = Pegawai::find($id);
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->alamat_pegawai = $request->alamat_pegawai;
        $pegawai->tgl_lahir_pegawai = $request->tgl_lahir_pegawai;
        $pegawai->jenis_kelamin_pegawai = $request->jenis_kelamin_pegawai;
        $pegawai->email = $request->email;
        $pegawai->no_telp_pegawai = $request->no_telp_pegawai;
        $pegawai->password = $request->password;
        //$pegawai->foto_pegawai = $request->foto_pegawai;
        $pegawai->id_role = $request->id_role;

        if($request->hasFile('foto_pegawai')){
            $request->file('foto_pegawai')->move('foto-pegawai/', $request->file('foto_pegawai')->getClientOriginalName());
            $pegawai->foto_pegawai = $request->file('foto_pegawai')->getClientOriginalName();
            $pegawai->save();
        }
        $pegawai->save();
        return redirect()->route('pegawai.index');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $pegawai = Pegawai::where('nama_pegawai','like','%'.$search.'%')->get();
        return view('PegawaiCRUD', compact('pegawai'));
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
       $pegawai = Pegawai::find($id);

        $pegawai->delete();

        return redirect()->route('pegawai.index');
    }
}
