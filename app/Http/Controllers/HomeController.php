<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Alumni;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
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
        $sliders = Slider::orderBy('id', 'desc')->take(3)->get();
        $users = User::all();
        $alumnis = Alumni::all();
        return view('mahasiswa.home', compact('sliders', 'alumnis', 'users'));
    }
    
    public function contact()
    {
        return view('mahasiswa.contact');
    }

    public function alumni()
    {
        $alumnis = Alumni::all();
        return view('mahasiswa.alumni');
    }
}
