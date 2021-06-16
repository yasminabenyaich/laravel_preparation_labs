<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informations = Information::paginate(2);
        return view('backoffice.information.all', compact('informations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.information.create");
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
            "img"=>"required",
            "titleTxt"=>"required",
            "st" => "required",
        ]);
        $information = new Information();

        $information->img = $request->img;
        $information->titleTxt = $request->titleTxt;
        $information->st = $request->st;

        $information -> updated_at = now();
        $information -> save();
        return redirect()->route("informations.index");

      

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        return view("backoffice.information.show", compact("information"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $information)
    {
        return view("backoffice.information.edit", compact("information"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Information $information)
    {
        $request->validate([
            "img"=>"required",
            "titleTxt" => "required",
            "st"=>"required",
        ]);
        $information = new Information();

        $information->titleTxt = $request->titleTxt;
        $information->st = $request->st;

        Storage::disk("public")->delete("img/" /$information->img);
        $information->img = $request->file("img")->hashName();
        $information -> updated_at = now();
        $information -> save();

        return redirect()->route("informations.index")->with("message","Feature a bien été bien modfier");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information)
    {
        $information->delete();
        return redirect()->back();
    }
}
