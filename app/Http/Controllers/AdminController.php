<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'header' => 'dashboard'
        ]);
    }

    public function books()
    {
        return view('admin.books');
    }
    public function permissions()
    {
        return view('admin.permissions');
    }

    public function librarians()
    {
        return view('admin.librarians');
    }

    public function users()
    {
        return view('admin.users');
    }
}