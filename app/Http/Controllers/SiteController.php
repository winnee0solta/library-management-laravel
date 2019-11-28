<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Reservedbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\User;
use Carbon\Carbon;

class SiteController extends Controller
{
    public function index()
    {
        // redirect to appropriate dashboard home
        //fetch title
        if (Auth::user()->title == 'admin') {



            $books =  Book::orderBy('book_name', 'ASC')->get();
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
            //load datas
            $categories = Category::orderBy('category_name')->get();
            return view('site.home',compact('categories'));
        }
    }
    public function searchBook(Request $request){
        $searchterm = request('search');

        $books = Book::where('book_name', 'like', '%' . $searchterm . '%')
        ->orWhere('book_author', 'like', '%' . $searchterm . '%')
        ->orWhere('book_shelves_no', 'like', '%' . $searchterm . '%')
        ->get();
        return view('site.singlecat', compact( 'books'));
    }
    public function contactusView(){
        return view('site.contactus');
    }
    public function contactus(){
        $name = request('name');
        $email = request('email');
        $message = request('message');
        // send mail/
        $currentuser =  Auth::user()->email;
        $data = array(
            'name' => $name,
            'bodymessage' => $message,
            'email' => $email,
        );


        //send mail TODO: mail change
        Mail::send('mail.newmessage', $data, function ($message) use ($email, $name) {
            $message->from($email,  $name);
            $message->to('iamalishaacharya@gmail.com', 'Library Admin');
            $message->subject('New Message From Library Site!');
        });

        return redirect('/');
    }
    public function aboutusView(){
        return view('site.aboutus');
    }
    public function faqView(){
        return view('site.faq');
    }
    public function termsView(){
        return view('site.terms');
    }
    public function singlecatView($id,$name){
        $books = Book::where('category_id',$id)->orderBy('book_name')->get();
        return view('site.singlecat',compact('name','books'));
    }
    public function singlebookView($id,$name){
        $isreserved = false;
        $outofstock = false;
        $needtoreturn = 'no';
        $book = Book::where('id',$id)->first();
        if (Reservedbook::where('book_id', $book->id)->count() == $book->book_count ) {
           $outofstock = true;
        }else if(Reservedbook::where('user_id', Auth::id())->where('book_id', $id)->count() > 0){
                $isreserved = true;
                $rb = Reservedbook::where('user_id', Auth::id())->where('book_id', $id)->first();
                if (!empty($rb)) {
                    $needtoreturn = $rb->return_date;
                }
        }
        return view('site.singlebook',compact('name','book', 'isreserved', 'outofstock', 'needtoreturn'));
    }
    public function reserveBook($id,$name){
        $book = Book::where('id',$id)->first();
        $dt = Carbon::now();
        if (Reservedbook::where('user_id',Auth::id())->where('book_id',$id)->count() == 0) {

            Reservedbook::create([
                'book_id'=>$id,
                'user_id'=> Auth::id(),
                'return_date'=> $dt->addDays(10),
            ]);
            $book->book_reserved = $book->book_reserved + 1;
            $book->save();
            // send mail/
            $currentuser =  Auth::user()->email;
            //send mail TODO: mail change
            Mail::send('mail.newbookreserved', [], function ($message) use ($currentuser) {
                $message->from($currentuser, 'New Book Reserved !');
                $message->to('iamalishaacharya@gmail.com', 'Library Admin');
                $message->subject('Book Reservation!');
            });
        }
        return redirect('/single-book/'.$id.'/'.$name);
    }
    public function cancelreserveBook($id,$name){
        if (Reservedbook::where('user_id',Auth::id())->where('book_id',$id)->count() > 0) {
            $book = Book::where('id', $id)->first();
            $book->book_reserved = $book->book_reserved - 1;
            $book->save();
            Reservedbook::where('user_id', Auth::id())->where('book_id', $id)->delete();

        }
        return redirect('/single-book/'.$id.'/'.$name);
    }
}
