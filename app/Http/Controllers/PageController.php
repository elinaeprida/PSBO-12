<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Slider;
use App\Models\Alumni;
use App\Models\User;
use App\Models\About;
use App\Models\Contact;
use App\Models\Grad;

class PageController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->take(3)->get();
        $users = User::all();
        $alumnis = Alumni::all();
        $grads = Grad::first();
        return view('index', compact('sliders', 'alumnis', 'users', 'grads'));
    }
    
    public function about(About $about)
    {
        $contacts = Contact::first();
        $abouts = About::first();
        return view('contact', compact('abouts', 'contacts'));
    }
}
