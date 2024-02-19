<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected function validateUser(Request $request)
    {
        return $request->validate([
            'first_name' => ['required', 'string', 'min:1', 'max:75'],
            'last_name' => ['required', 'string', 'min:1', 'max:75'],
        ]);
    }
    protected function validateUserWithNumbers(Request $request)
    {
        return $request->validate([
            'first_name' => ['required', 'string', 'min:1', 'max:75'],
            'last_name' => ['required', 'string', 'min:1', 'max:75'],
            'numbers' => ['required', 'array'],
            'numbers.*' => ['string', 'distinct', 'unique:contacts,number'],
        ]);
    }
    public function index()
    {
        $users = User::orderBy("created_at", "desc")->paginate(12);

        return view("home.index", ['users' => $users]);
    }

    public function store(Request $request)
    {
        $validated = $this->validateUserWithNumbers($request);
        $user = User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
        ]);
        $contactController = new ContactController();
        $contactController->storeMany($validated['numbers'], $user->id);
        return redirect()->route('users', $user->id)->with('status', "The user has been created");
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view("users.edit", ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $validated = $this->validateUser($request);
        $user = User::find($id);
        $user->update([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
        ]);

        return redirect()->route("users")->with('status', "The user has been updated");
    }

    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return redirect()->route('users')->with('status', "The user has been deleted");
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('users')->withErrors(['error' => 'The user was not found']);
        }
    }
}
