<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
    
        $midterm = midterm::all();
        return view('midterm.index', compact('midterm'));
    }


    public function create()
    {
        return view('midterm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $midterm = new Midterm([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'record_date' => $request->get('record_date'),
        ]);
        $midterm->save();
        return redirect('/midterm')->with('success', ' saved!');
    }
    public function show($sr)
    {
    
    }

    public function edit($sr)
    {
        $contact = midterm::find($sr);
        return view('midterm.add_edit', compact('midterm'));
    }

    public function update(Request $request, $sr)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $midterm = midterm::find($sr);
        $midterm->first_name =  $request->get('first_name');
        $midterm->last_name = $request->get('last_name');
        $midterm->email = $request->get('email');
        $midterm->phone = $request->get('phone');
        $midterm->record_date = $request->get('record_date');
        $midterm->save();

        return redirect('/midterm')->with('success', ' updated!');
       // return redirect('/');
    }
    public function destroy($id)
    {
       $contact = Contact::find($id);
        $contact->delete();
       // return redirect('/');
       return redirect('/midterm')->with('success', ' deleted!');
    }




}