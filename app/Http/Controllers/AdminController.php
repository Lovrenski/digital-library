<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Permissions;
use App\Models\User;
use App\Models\Books;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $books = Books::get();
        return view('admin.dashboard', [
            'header' => 'dashboard',
            'books' => $books,
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

    public function addBook(Request $request)
    {
        $data = $request->validate([
            'title'        => 'required|min:3|unique:books,title',
            'author'       => 'required|min:3',
            'year'         => 'required|date',
            'synopsis'     => 'required',
            'cover'        => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'categories'   => 'required|array',
            'categories.*' => 'exists:categories,id',
            'file'         => 'required|file|mimes:pdf|max:20000',
        ]);

        $data['publisher'] = auth()->user()->name;
        $data['slug']      = Str::of(request('title'))->slug('-');
        $data['cover']     = $request->file('cover')->store('covers', 'public');
        $data['file']      = $request->file('file')->store('files', 'public');

        $book = Books::create($data);

        $book->category()->attach($data['categories']);

        return redirect()->back()->with('success', 'Book added successfully');
    }

    public function editBook($id)
    {
        $book = Books::findOrFail($id);
        $categories = Category::get();
        return view('admin.edit-book', [
            'book' => $book,
            'categories' => $categories,
        ]);
    }

    public function updateBook(Request $request, $id)
    {
        $data = $request->validate([
            'title'        => 'required|min:3|unique:books,title,' . $id,
            'author'       => 'required|min:3',
            'year'         => 'required|date',
            'synopsis'     => 'required|string',
            'cover'        => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file'         => 'nullable|mimes:pdf,doc,docx|max:10000',
            'categories'   => 'nullable|array',
            'categories.*' => 'exists:categories,id',
        ]);

        $data['slug'] = Str::of($request->title)->slug('-');

        $book = Books::findOrFail($id);

        $book->title    = $data['title'];
        $book->slug     = $data['slug'];
        $book->author   = $data['author'];
        $book->year     = $data['year'];
        $book->synopsis = $data['synopsis'];

        if ($request->hasFile('cover')) {
            if ($book->cover && public_path('storage/' . $book->cover) !== null) {
                unlink(public_path('storage/' . $book->cover));
            }
            $book->cover = $request->file('cover')->store('covers', 'public');
        }

        if ($request->hasFile('file')) {
            if ($book->file && public_path('storage/' . $book->file) !== null) {
                unlink(public_path('storage/' . $book->file));
            }
            $book->file = $request->file('file')->store('files', 'public');
        }

        $book->save();

        if ($request->has('categories')) {
            $book->category()->sync($request->categories);
        }

        return redirect()->route('books')->with('success', 'Book successfully updated!');
    }

    public function destroyBook($id)
    {
        $book = Books::findOrFail($id);

        if ($book->cover !== null) {
            unlink(public_path('storage/' . $book->cover));
        }

        if ($book->file !== null) {
            unlink(public_path('storage/' . $book->file));
        }

        $book->category()->detach();
        $book->delete();
        return redirect()->back()->with('success', 'Book deleted successfully!');
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

    public function destroyCategory($id)
    {
        Category::find($id)->delete();
        return redirect()->back()->with('success', 'Category deleted successfully');
    }

    public function permissions()
    {
        $permissions = Permissions::get();
        return view('admin.permissions', [
            'permissions' => $permissions,
        ]);
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
            'name'     => 'required|min:3',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:5',
        ]);

        $data['role']     = 'librarian';
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
}
