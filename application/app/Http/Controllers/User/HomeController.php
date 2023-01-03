<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
            $this->middleware('role: isUser');
        }

        public function index()
        {
            if (Auth::user()->role == 'user') {
                return view('dashboard-user.home.index');
            } else {
                abort(403);
            }
        }
    }

