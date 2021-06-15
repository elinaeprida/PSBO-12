<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Slider;
use App\Models\Alumni;
use App\Models\User;
use App\Models\Grad;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->take(3)->get();
        $users = User::all();
        $alumnis = Alumni::all();
        $grads = Grad::all();
        return view('admin.slider.index', compact('sliders', 'alumnis', 'users', 'grads'));
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
        $validatedData = $request->validate([
            'alumni_id' => 'required',
            'user_id' => 'required',
        ]);
        
        $slider = Slider::create($validatedData);

        // return redirect()->route('create_slider');
        dd ('success!');
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grad $grad) {
        $request->validate([
            'tepat_waktu' => 'required',
            'dapat_kerja' => 'required',
            'kerja_sesuai' => 'required',
        ]);

        $grad->update([
            'tepat_waktu' => $request->tepat_waktu,
            'dapat_kerja' => $request->dapat_kerja,
            'kerja_sesuai' => $request->kerja_sesuai,
        ]);

        $grad->save();
        // return redirect()->route('dashboard');
        dd('grad->id');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        Slider::destroy($slider->id);
        return redirect('/admin/dashboard')->withSuccess('delArticle');
    }
}
