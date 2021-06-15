<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Alumni;
use App\Models\User;
use App\Models\About;
use App\Models\Contact;
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
    
    public function about(About $about, Contact $contact)
    {
        $contacts = Contact::all();
        $abouts = About::all();
        return view('mahasiswa.contact', compact('abouts', 'contacts'));
    }

    public function alumni(Request $request, Alumni $alumni, User $user)
    {
        // if($request->has('cari')){
        //     $alumnis = Alumni::where('nama', 'LIKE', '%'.$request->cari.'%')->get();
        // }else(
        //     $alumnis = Alumni::all()
        // );

        // $users = User::orderBy('name', 'asc')->get()->all();
        $alumnis = Alumni::orderBy('angkatan', 'asc')->get()->all();;
        $users = User::all();
        // $users = User::select("name")
        //         ->where("name","LIKE","%{$request->name}%")
        //         ->get();
   
        // return ;
        // $sorted = $users->sortBy('name');
        
        return view('mahasiswa.alumniuser', compact('alumnis', 'users'));
    }

    // public function search(Request $request)
    // {
        //get the general information about the alumni
        // $alumni = Alumni::query()->firstOrFail();

        // $alumni = trim($request->get('name'));

        // $posts = Post::query()
        //     ->where('title', 'like', "%{$key}%")
        //     ->orWhere('content', 'like', "%{$key}%")
        //     ->orderBy('created_at', 'desc')
        //     ->get();

        //get all the categories

        // //get all the tags
        // $tags = Tag::all();

        // //get the recent 5 posts
        // $recent_posts = Post::query()
        //     ->where('is_published', true)
        //     ->orderBy('created_at', 'desc')
        //     ->take(5)
        //     ->get();

        // return view('mahasiswa.alumniuser');
    // }
}
