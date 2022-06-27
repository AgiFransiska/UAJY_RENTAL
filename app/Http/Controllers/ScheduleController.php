<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Jadwal;
use App\Models\Pegawai;

class ScheduleController extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->has('search')){
            $schedule = Schedule::where( 'hari','LIKE','%' .$request->search. '%' )->paginate(5);
        }else{
            /* $data = Pegawai::paginate(5); */
            $schedule = Schedule::paginate(5);
        } 
        $jadwal = Jadwal::All();
        $pegawai = Pegawai::All();
        return view ('JadwalCRUD.index', compact ('schedule', 'jadwal', 'pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jadwal = Jadwal::All();
        $pegawai = Pegawai::All();
        return view('JadwalCRUD.create', compact ('jadwal','pegawai'));
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
        $schedule = Schedule::create([
            'id_pegawai' => $request->id_pegawai,
            'id_jadwal' =>$request->id_jadwal,
            'hari' => $request->hari
        ]);

        $schedule->save();
        return redirect()->route('schedule.index');
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
        $schedule = Schedule::where('id', $id)->first();
        $jadwal = Jadwal::All();
        $pegawai = Pegawai::All();
        return view('JadwalCRUD.show', compact ('schedule','jadwal','pegawai'));
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
        $schedule = Schedule::find($id);

        return view('JadwalCRUD.edit', ['schedule' => $schedule]);
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
        $schedule = Schedule::find($id);
        $schedule->id_pegawai = $request->id_pegawai;
        $schedule->id_jadwal = $request->id_jadwal;
        $schedule->hari = $request->hari;
    

        $schedule->save();
        return redirect()->route('schedule.index');
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
        $schedule = Schedule::find($id);

        $schedule->delete();

        return redirect()->route('schedule.index');
    }
}
