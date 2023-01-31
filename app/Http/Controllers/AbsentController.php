<?php

namespace App\Http\Controllers;

use App\Models\Absent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAbsentRequest;
use App\Http\Requests\UpdateAbsentRequest;
use Carbon\Carbon;

class AbsentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            // 'absents' => Absent::with('student')->where('id_murid', 1)
            'absents' => Absent::with('student')->get(),
            'current_time' => Carbon::now()->toTimeString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAbsentRequest  $request
     * @return \Illuminate\Http\Response
     */

    // public function authorize(){
    //     return true;
    // }
    public function store(Request $request)
    {
        // dd($request);
        $current_time = Carbon::now()->toTimeString();

        Absent::create([
            'id_murid' => $request->id_murid,
            'jam_datang' => $current_time,
            'jam_pulang' => $request->jam_keluar,
            'status' => 'hadir',
            'keterangan' => (($current_time > $request->jam_masuk)? 'terlambat' : 'tepat waktu')
        ]);

        return back()->with('absentSuccess', 'Absensi berhasil, Selamat Bekerja!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absent  $absent
     * @return \Illuminate\Http\Response
     */
    public function show(Absent $absent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absent  $absent
     * @return \Illuminate\Http\Response
     */
    public function edit(Absent $absent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAbsentRequest  $request
     * @param  \App\Models\Absent  $absent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAbsentRequest $request, Absent $absent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absent  $absent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absent $absent)
    {
        //
    }
}
