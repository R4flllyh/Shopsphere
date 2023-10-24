<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserManagementController extends Controller
{
    public function index() {
        $user = User::all();
        return view('pages.user-management', compact('user'));
    }

    public function add() {
        return view('pages.usermanagement.add');
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'username' => ['max:255', 'min:2'],
            'firstname' => ['max:100'],
            'lastname' => ['max:100'],
            'email' => ['email', 'max:255', 'unique'],
            'role' => ['max:255'],
            'address' => ['max:100'],
            'city' => ['max:100'],
            'country' => ['max:100'],
            'postal' => ['max:100'],
            'about' => ['max:255']
        ]);

        User::create([
            'username' => $request->get('username'),
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email') ,
            'role' => $request->get('role'),
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'postal' => $request->get('postal'),
            'about' => $request->get('about')
        ]);
        return back()->with('succes', 'User Berhasi Di tambahkan');
    }

    public function detail($id){
        $user = User::find($id);
        return view('pages.usermanagement.detail', compact('user'));
    }

    public function edit($id){
        $user = User::find($id);
        return view('pages.usermanagement.edit', compact('user'));
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $attributes = $request->validate([
            'username' => ['max:255', 'min:2'],
            'firstname' => ['max:100'],
            'lastname' => ['max:100'],
            'email' => ['email', 'max:255', 'unique'],
            'address' => ['max:100'],
            'city' => ['max:100'],
            'country' => ['max:100'],
            'postal' => ['max:100'],
            'about' => ['max:255']
        ]);

        $user->update([
            'username' => $request->get('username'),
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email') ,
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'postal' => $request->get('postal'),
            'about' => $request->get('about')
        ]);
        return back()->with('succes', 'User Berhasil di updated');
    }

    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('siswa')->with('succes', 'Berhasil Menghapus Data User');
    }
}
