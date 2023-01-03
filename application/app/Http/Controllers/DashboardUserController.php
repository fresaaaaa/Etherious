<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // dd($user);
        return view('dashboard.index', [
            'user' => $user
        ]);
    }

    public function edit(user $user)
    {
        return view('dashboard.index');
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'username' => ['required', 'min:3', 'max:255', 'unique:user'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'image' => 'image|file|max:2000'
        ];

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('table-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        User::where('id', $user->id)
            ->update($validateData);

        return redirect('/dashboard')->with('success', 'Post has been updated!');
    }

    public function store(Request $request)
    {
        return $request->file('image')->store('user-images');   
    }
}
