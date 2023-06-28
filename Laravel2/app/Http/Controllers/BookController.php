<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Routing\Controller as BaseController;

class BookController extends BaseController

{

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        // Tìm kiếm trong cơ sở dữ liệu
        $books = Book::where('title', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('authorid', 'LIKE', '%' . $searchTerm . '%')
                    ->get();

        return view('/search', compact('books', 'searchTerm'));
    }

}
