<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //Get and show all Users
    public function index(){
       
        return view('listings.index', [
            'listings' => Listing::all()
        ]);
    }

    //Show Create Form
    public function create(){
        return view('listings.create');
    }

    //Validate and Store User data 
    public function store(Request $request ){
        $formFields = $request -> validate([
            'name' => 'required',
            'email' => ['required','email', Rule::unique('listings','email')],
            'address' => 'required'
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('userImages','public');
        }

        listing::create($formFields);


        return redirect('/');
    }

    //Show Edit Form
    public function edit(Listing $listing){
        return view('listings.edit',['listing'=>$listing]);
    }

    //Update User Details
    public function update(Request $request, Listing $listing ){
        $formFields = $request -> validate([
            'name' => 'required',
            'email' => ['required','email'],
            'address' => 'required'
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('userImages','public');
        }

        $listing->update($formFields);


        return redirect('/');
    }

    //Delete User Data
    public function delete(listing $listing ){
        $listing->delete();

        return redirect('/');
    }

}


