<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function list()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact.list', compact('contacts'));
    }

    public function delete($id)
    {
        $delete = Contact::findOrFail($id);
        $delete->delete();

        return back();
    }
}
