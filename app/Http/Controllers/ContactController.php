<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::paginate(2);
        return view("backoffice.contact.all",compact("contacts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.contact.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "icone"=>"required",
            "titleTxt"=> "required",
            
        ]);

        $contact = new Contact();

        $contact->icone = $request->icone;
        $contact->titleTxt = $request->titleTxt;
        $contact->text = $request->text;
        $contact->phone = $request->phone;
        
        $contact->created_at = now();
        $contact->save();
        return redirect()->route("contects.index")->with("message","Le contact a bien ete créer");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view("backoffice.contact.show", compact("contact"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view("backoffice.contact.edit", compact("contact"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            "icone"=>"required",
            "titleTxt"=>"required",
    
        ]);
        $contact->icone = $request->icone;
        $contact->titleTxt = $request->tiltleTxt;
        $contact->text = $request->text;
        $contact->phone = $request->phone;
        
        $contact->update_at=now();
        $contact->save();
        
        return redirect()->route("contacts.index")->with("message","le contact a bien été modifié");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->back();
    }
}
