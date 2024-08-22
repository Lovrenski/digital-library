<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Category;
use App\Models\Collections;
use App\Models\Permissions;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    public function index()
    {
        $books       = Books::get();
        $categories  = Category::get();
        $collections = Collections::get();

        return view('reader.index', [
            'books'       => $books,
            'categories'  => $categories,
            'collections' => $collections
        ]);
    }

    public function show($slug)
    {
        $book       = Books::where('slug', $slug)->first();
        $permission = Permissions::where('book_id', $book->id)->where('user_id', auth()->user()->id)->first();
        return view('reader.book-detail', [
            'book'       => $book,
            'permission' => $permission,
        ]);
    }

    public function requests()
    {
        $requests = Permissions::where('user_id', auth()->user()->id)->get();
        return view('reader.requests', [
            'requests' => $requests,
        ]);
    }

    public function borrow(Request $request)
    {
        $data = $request->validate([
            'book_id' => 'required',
        ]);

        $data['user_id']   = auth()->user()->id;
        $data['librarian'] = '';

        Permissions::create($data);
        return redirect()->route('requests')->with('success', 'Request processed, please wait for the response');
    }

    public function cancel($id)
    {
        Permissions::where('id', $id)->delete();
        return redirect()->route('requests')->with('success', 'Request canceled');
    }
}
