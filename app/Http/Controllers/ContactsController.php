<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use App\Models\Contacts;

class ContactsController extends Controller
{
    // get all contacts
    public function index()
    {
        return Contacts::all();
    }

    // create new contact
    public function store(Request $request)
    {
        return Contacts::create($request->all());
    }

    // get one contact
    public function show($id)
    {
        return Contacts::find($id);
    }

    // update a contact 
    public function update(Request $request, $id)
    {
        $contact = Contacts::find($id);
        $contact->update($request->all());
        return $contact;
    }

    // delete a contact
    public function destroy($id)
    {
        return Contacts::destroy($id);
    }
}
