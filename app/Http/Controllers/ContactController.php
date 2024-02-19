<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function storeMany($phoneNumbers, $user_id)
    {
        $contacts = collect($phoneNumbers)->map(function ($phoneNumber) use ($user_id) {
            return new Contact(['number' => $phoneNumber, "user_id" => $user_id]);
        });
        Contact::insert($contacts->toArray());

        return response()->json(['message' => 'Contacts created successfully'], 201);
    }
    protected function validateStoreNumber(Request $request)
    {
        return $request->validate([
            'number' => ['required', 'string', 'distinct', 'unique:contacts,number'],
            "user_id" => ['required', 'integer', 'exists:users,id'],
        ]);
    }

    protected function validateEditNumber(Request $request)
    {
        return $request->validate([
            'number' => ['required', 'string', 'distinct', 'unique:contacts,number'],
        ]);
    }

    public function create($user_id)
    {
        try {
            $user = User::findOrFail($user_id);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('posts')->withErrors(['error' => 'The user was not found']);
        }

        return view('contacts.create', ['user_id' => $user_id]);
    }



    public function store(Request $request)
    {
        $validated = $this->validateStoreNumber($request);
        $contact = Contact::create([
            'number' => $validated['number'],
            "user_id" => $validated['user_id'],
        ]);
        return redirect()->route('users')->with('status', "The contact has been created");
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view("contacts.edit", ['contact' => $contact]);
    }
    public function update(Request $request, $id)
    {
        $validated = $this->validateEditNumber($request);
        $contact = Contact::find($id);
        $contact->update([
            'number' => $validated['number'],
        ]);

        return redirect()->route("users")->with('status', "The contact has been updated");
    }

    public function destroy($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->delete();
            return redirect()->route('users')->with('status', "The contact has been deleted");
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('users')->withErrors(['error' => 'The contact was not found']);
        }
    }
}
