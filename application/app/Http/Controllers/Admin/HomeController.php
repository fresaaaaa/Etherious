<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function __invoke()
        {
            $this->middleware('auth');
            $this->middleware('role: admin');
        }

        public function index()
        {
            if (Auth::user()->role == 'admin') {
                return view('dashboard-admin.home.index');
            } else {
                abort(403);
            }
        }
    }

