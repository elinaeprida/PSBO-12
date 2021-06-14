<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Slider;
use App\Models\Alumni;
use App\Models\User;

class PageController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->take(3)->get();
        $users = User::all();
        $alumnis = Alumni::all();
        return view('index', compact('sliders', 'alumnis', 'users'));
    }
    
    public function about()
    {
        return view('contact');
    }
}
