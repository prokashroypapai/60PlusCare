<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::paginate(10);
        return view('backend.contact.index', compact('contacts'));
    }

    public function show($id){
        $contact = Contact::findorFail($id);
        return view('backend.contact.show', compact('contact'));
    }
}
