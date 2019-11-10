<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class SiteController extends Controller
{
    public function index()
    {
        // redirect to appropriate dashboard home
        //fetch title
        if (Auth::user()->title == 'admin') {



            $books =  Book::orderBy('created_at', 'desc')->get();
            $datas = array();
            $count = 1;
            foreach ($books as $book) {
                $category = 'none';
                //get category name
                if (Category::where('id', $book->category_id)->count() == 0) {
                   $book->category_id = 0;
                   $book->save();
                }else{

                $cat = Category::where('id', $book->category_id)->first();
                $category = $cat->category_name;
                }
                $temp_array = array(
                    'sn' => $count,
                    'category_name' => $category,
                    'book_image' => $book->book_image,
                    'id' => $book->id,
                    'book_id' => $book->book_id,
                    'book_name' => $book->book_name,
                    'book_author' => $book->book_author,
                    'book_desc' => $book->book_desc,
                    'book_shelvesno' => $book->book_shelves_no,
                    'book_count' => $book->book_count,
                    'book_reserved' => $book->book_reserved,
                    'book_taken' => $book->book_taken,
                    'added_date' => $book->created_at->format('Y-m-d'),
                );
                array_push($datas, $temp_array);
                $count++;
            }
            // return $datas;
            return view('dashboard.index', compact('datas'));
        } else if (Auth::user()->title == 'public') {
            return view('site.index');
        }
    }
}
