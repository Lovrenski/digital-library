<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Books;
use App\Models\Category;
use Illuminate\Support\Str;
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
        $categories = Category::get();
        $books = Books::get();
        return view('admin.books', [
            'categories' => $categories,
            'books' => $books,
        ]);
    }

    public function categories()
    {
        $categories = Category::get();
        return view('admin.categories', [
            'categories' => $categories,
        ]);
    }

    public function addCategory(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3|unique:categories',
        ]);

        $data['slug'] = Str::of(request('name'))->slug('-');

        Category::create($data);
        return redirect()->back()->with('success', 'Category added successfully');
    }

    public function permissions()
    {
        return view('admin.permissions');
    }

    public function librarians()
    {
        $librarians = User::where('role', 'librarian')->get();
        return view('admin.librarians', [
            'librarians' => $librarians,
        ]);
    }

    public function addLibrarian(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5',
        ]);

        $data['role'] = 'librarian';
        $data['password'] = bcrypt($data['password']);

        User::create($data);
        return redirect()->back()->with('success', 'Librarian added successfully');
    }

    public function users()
    {
        $users = User::where('role', 'reader')->get();
        return view('admin.users', [
            'users' => $users,
        ]);
    }

    public function destroyUser($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }

    public function destroyCategory($id)
    {
        Category::find($id)->delete();
        return redirect()->back()->with('success', 'Category deleted successfully');
    }
}