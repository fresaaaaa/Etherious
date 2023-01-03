<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AnimeController;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role: admin');
    }

    public function index()
    {
        if (Auth::user()->role == 'admin') {
            return view('dashboard-admin.index');
        } else {
            abort(403);
        }
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'username' => 'required|max:255',
            'email' => 'required',
            'password' => 'required',
            'image' => 'required'
        ];

        $validatedData = $request->validate($rules);

        dd('sukses');
        User::where('id', $user->id)->update($validatedData);

        return redirect('/dashboard-admin')->with('success', 'user telah ditambahkan');
      }
}
