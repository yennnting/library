<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function store()
    {
        $book = Book::create($this->validateRequest());
        return redirect($book->path());
    }

    public function update(Book $book)
    {
        $book->update($this->validateRequest());
        return redirect($book->path());
    }

    public function destory(Book $book)
    {
        $book->delete();
        return redirect('/books');
    }

    /**
     * @return array
     */
    protected function validateRequest(): array
    {
        return request()->validate([
            'title' => 'required',
            'author_id' => 'required',
        ]);
    }
}
