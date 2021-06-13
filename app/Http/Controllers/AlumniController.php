<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AlumniController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Alumni $alumni)
    {

        return view('alumni.alumniprofile', compact('alumni'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumni $alumni)
    {
        return view('alumni.alumniedit', compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni)
    {
        $request->validate([
            'nama' => 'required',
            'angkatan' => 'required',
            'spesialisasi' => 'required',
            'jabatan' => 'required',
            'perusahaan' => 'required',
            'domisili_pekerjaan' => 'required',
            'domisili_asal' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
            'github' => 'required',
        ]);

        $alumni->update([
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'spesialisasi' => $request->spesialisasi,
            'jabatan' => $request->jabatan,
            'perusahaan' => $request->perusahaan,
            'domisili_pekerjaan' => $request->domisili_pekerjaan,
            'domisili_asal' => $request->domisili_asal,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'github' => $request->github,
        ]);
    
       if($request->hasFile('avatar')) {
            $storedImg = $alumni->avatar;
            $alumni->update(['article_img' => $request->file('avatar')->store('alumni/avatar', 'public')]);
            if(Storage::exists('public/' . $alumni->avatar)) {
                Storage::delete('public/' . $storedImg);
            }
        }

        return redirect()->route('profile');
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
    }
}
