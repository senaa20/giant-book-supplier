<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use App\Models\Category;
use Illuminate\Http\Request;


class AppController extends Controller
{
    public function index(){
        return view('index', [
            'title' => 'Book List',
            'books' => Book::all(),
            'categories' => Category::all()

        ]);
    }

    public function detail(Book $book){
        return view('detail', [
            'title' => 'Book Detail',
            'book' => $book,
            'categories' => Category::all()

        ]);
    }

    public function category(Category $category){
        return view('index', [
            'title' => $category->name,
            'books' => $category->books,
            'categories' => Category::all()
        ]);
    }

    public function publisher(){
        $publisher = Publisher::All();
        return view('publisher', [
            "publisher" => $publisher 
        ]);
    }

    public function publisherdetail(Publisher $id){
        $datapublisher = $id;
        $databuku = $id->books()->get();

        return view('detail-publisher', [
            "datapublisher" => $datapublisher,
            "databuku" => $databuku
        ]);
    }

    public function contact(){
        return view('contact');
    }
}
