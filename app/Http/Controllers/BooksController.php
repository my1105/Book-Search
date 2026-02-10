<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Publisher;

class BooksController extends Controller
{
    public function index()
    {
        $book_name = request()->input('book_name');
        $author = request()->input('author');
        $publisher_id = request()->input('publisher');
        $min_price = intval(request()->input('min_price'));
        $max_price = intval(request()->input('max_price'));
        $query = Book::with('publisher');
        if ($book_name) {
            $query->where('book_name', 'LIKE', "%$book_name%");
        }
        if ($author) {
            $query->where('author', 'LIKE', "%$author%");
        }
        if ($publisher_id) {
            $query->where('publisher_id', $publisher_id);
        }
        if ($min_price) {
            $query->where('price', '>=', $min_price);
        }
        if ($max_price) {
            $query->where('price', '<=', $max_price);
        }

        $books = $query->get();

        $publishers = Publisher::orderBy('name_kana')->get();

        return view('index', ['books' => $books, 'publishers' => $publishers]);
    }
}
