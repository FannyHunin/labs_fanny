<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactFormData = ContactForm::all()[0];
        return view("admin.contactForm", compact("contactFormData"));
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
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function show(ContactForm $contactForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactForm $contactForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validateForm = $request->validate([
            'title' =>'required|min:1|max:30',
            'text' =>'required|min:1|max:200',
            'adress' =>'required|min:1|max:60',
            'phone' =>'required|min:1|max:20',
            'mail' =>'required|min:1|max:50',
        ]);
        $newEntry = ContactForm::all()[0];
        $newEntry->title = $request->title;
        $newEntry->text = $request->text;
        $newEntry->adress = $request->adress;
        $newEntry->phone = $request->phone;
        $newEntry->mail = $request->mail;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactForm $contactForm)
    {
        //
    }
}
