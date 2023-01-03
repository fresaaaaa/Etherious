<?php

namespace App\Http\Controllers\User;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role: isUser');
    }

    public function index()
    {
        if (Auth::user()->role == 'user') {
            return view('dashboard-user.index');
        } else {
            abort(403);
        }
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'image' => 'required',
            'username' => 'required|max:255',
            'email' => 'required',
            'password' => 'required'
        ];

        $validatedData = $request->validate($rules);

        dd('sukses');
        User::where('id', $user->id)->update($validatedData);

        return redirect('/dashboard-user')->with('success', 'user telah diubah');
      }
}
