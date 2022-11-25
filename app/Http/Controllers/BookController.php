<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Response;

class BookController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $books = Book::where('user_id', $id)->get();
        return view('books.books', compact('books'));
    }

    public function showBook(string $routeBook)
    {
        return Storage::disk('books/book')->download($routeBook);
    }

    public function getCover(string $routeCover)
    {
        $file = Storage::disk('books/cover')->get($routeCover);
        return Image::make($file)->response();
    }

    public function uploadBook(Request $request)
    {
        if ($request->hasFile('book')) {
            $id = auth()->user()->id;
            $imageBook      = $request->file('book');
            $fileNameBook = time() . '.' . $imageBook->getClientOriginalExtension();
            Storage::disk('books/book')->put('/' . $fileNameBook, file_get_contents($imageBook));
            $imageCover      = $request->file('cover');
            $fileNameCover   = time() . '.' . $imageCover->getClientOriginalExtension();
            Storage::disk('books/cover')->put('/' . $fileNameCover, file_get_contents($imageCover));
            $book = new Book;
            $book->user_id = $id;
            $book->description = $request->description;
            $book->title = $request->title;
            $book->author = $request->author;
            $book->routeCover = $fileNameCover;
            $book->routeBook = $fileNameBook;
            $book->save();
            return redirect('/books');
        }
    }
    public function deleteBook(Request $request)
    {
        if ($request->id_book) {
            $book = Book::find($request->id_book);
            $book->delete();

            Storage::disk('books')->delete($book->route);
            return redirect('/books');
        }
    }
    public function uploadReview(Request $request)
    {
        if ($request->review) {
            $id = auth()->user()->id;
            $review = new Review;
            $review->user_id = $id;
            $review->book_id = $request->id_book;
            $review->review = $request->review;
            $review->score = $request->score;
            $review->save();
            return redirect('/home');
        }
    }
}
