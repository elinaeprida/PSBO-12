<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;

class AboutController extends Controller
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

    public function index(About $about, Contact $contact)
    {
        $abouts = About::all();
        $contacts = Contact::all();
        return view('admin.about.index', compact('abouts', 'contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
        ]);

        $about->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'description' => $request->description,
        ]);
        return redirect()->route('admin_about');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_contact(Contact $contact)
    {
        return view('admin.about.editcontact', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_contact(Request $request, Contact $contact)
    {
        $request->validate([
            'location' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'link_more' => 'required',
        ]);

        $contact->update([
            'location' => $request->location,
            'phone' => $request->phone,
            'email' => $request->email,
            'link_more' => $request->link_more,
        ]);
        return redirect()->route('admin_about');
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
