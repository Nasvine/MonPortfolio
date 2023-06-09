<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            "nom"     => "required",
            "prenom"  => "required",
            "objet"   => "required",
            "email"   => "required",
            "message" => "required",
        ]);
        
        
        #dd($request->all());
        $tab_contact = array(
            'nom'     =>  $validation['nom'],
            'prenom'  =>  $validation['prenom'],
            'objet'   =>  $validation['objet'],
            'email'   =>  $validation['email'],
            'message' =>  $validation['message'],
        );
        
        $tab_mail_contact = [
            'title'   =>  "Message Portfolio",
            'nom'     =>  $validation['nom'],
            'prenom'  =>  $validation['prenom'],
            'objet'   =>  $validation['objet'],
            'email'   =>  $validation['email'],
            'message' =>  $validation['message'],
        ];
        
        Contact::create($tab_contact);
        Mail::to("nassvine2@gmail.com")->send(new \App\Mail\ContactMail($tab_mail_contact));

        return to_route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
