<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function manageCategoryView()
    {

        $categorys =  Category::orderBy('created_at', 'desc')->get();
        $datas = array();
        $count = 1;
        foreach ($categorys as $cat) {

            $temp_array = array(
                'sn' => $count,
                'image' => $cat->category_image,
                'id' => $cat->id,
                'name' => $cat->category_name,
                'added_date' => $cat->created_at->format('Y-m-d'),
            );
            array_push($datas, $temp_array);
            $count++;
        }

        return view('dashboard.managecategory', compact('datas'));
    }
    public function addNewCategoryView()
    {

        return view('dashboard.addnewcategory');
    }

    public function addNewcategory(Request $request)
    {
        $this->validate($request, [
            'category-name' => 'required',
        ]);

        if ($request->hasFile('category-image')) {
            //add category

            $category = Category::create([
                'category_image' => 'no',
                'category_name' => request('category-name')
            ]);

            // add image
            $file = $request->file('category-image');
            $unique_id = uniqid();
            $file->move('images/category/', $unique_id . '.' . $file->getClientOriginalExtension());
            $category->category_image = $unique_id . '.' . $file->getClientOriginalExtension();
            $category->save();

            $currentadmin =  Auth::user()->email;
            //send mail TODO: mail change
            Mail::send('mail.newcategoryadded', [], function ($message) use ( $currentadmin) {
                $message->from($currentadmin, 'New Category Added !');
                $message->to('winneecreztha@gmail.com', 'Library Admin');
                $message->subject('New Category Added!');
            });

            return redirect('/dashboard/manage-category');
        } else {
            return redirect('/dashboard/add-new-category')->withErrors(['Fill in fields']);
        }

    }
    public function removeCategory($id)
    {
        //check id book exists
        $cat =  Category::find($id);
        $cat->delete();

        $currentadmin =  Auth::user()->email;
        //send mail TODO: mail change
        Mail::send('mail.categoryremoved', [], function ($message) use ($currentadmin) {
            $message->from($currentadmin, 'Category Removed !');
            $message->to('winneecreztha@gmail.com', 'Library Admin');
            $message->subject('Category Removed');
        });
        return redirect('/dashboard/manage-category');
    }

    public function addNewBookView()
    {
        //get category
        $categorys = Category::get(['id','category_name']);
        return view('dashboard.addnewbook',compact('categorys'));
    }
    public function addNewBook(Request $request)
    {

        $this->validate($request, [
            'book-name' => 'required',
            'book-author' => 'required',
            'book-desc' => 'required',
            'book-shelve-no' => 'required'
        ]);

        if ($request->hasFile('book-image')) {
            //add book
            $book = Book::create([
                'book_id' => 0,
                'book_image' => 'no',
                'book_name' => request('book-name'),
                'book_shelves_no' => request('book-shelve-no'),
                'book_author' => request('book-author'),
                'book_desc' => request('book-desc'),
                'book_count' =>(int) request('book-count'),
            ]);

            // add image
            $file = $request->file('book-image');
            $unique_id = uniqid();
            $file->move('images/books/', $unique_id . '.' . $file->getClientOriginalExtension());
            $book->book_image = $unique_id . '.' . $file->getClientOriginalExtension();
            $book->book_id = (int) $unique_id;
            $book->save();


            $currentadmin =  Auth::user()->email;
            //send mail TODO: mail change
            Mail::send('mail.newbookadded', [], function ($message) use ($currentadmin) {
                $message->from($currentadmin, 'New Category Added !');
                $message->to('winneecreztha@gmail.com', 'Library Admin');
                $message->subject('New Book Added!');
            });
            return redirect('/');
        } else {
            return redirect('/admin/add-new-book')->withErrors(['Fill in fields']);
        }
    }
}
