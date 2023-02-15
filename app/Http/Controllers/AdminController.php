<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $bookCount = Book::count();
        $categoryCount = Category::count();
        $userCount = User::count();
        return view('admin.dashboard', ['book_count' => $bookCount, 'category_count' => $categoryCount, 'user_count' => $userCount, ]);
    }

    public function user()
    {
        $users = User::where('roles_id', 2)->where('status', 'active')->get();
        return view('admin.user', ['users' => $users]);
    }

    public function usersRegistered()
    {
        $users = User::where('roles_id', 2)->where('status', 'inactive')->get();
        return view('admin.usersRegistered', ['users' => $users]);
    }

    public function usersDetail($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view('admin.usersDetail', ['user'=>$user]);

    }

    public function usersApprove ($slug)
    {
        $user = User::where('slug', $slug)->first();
        $user->status = 'active'; 
        $user->save();
        return redirect('users-detail/'.$slug)->with('status', 'User Approved Sucssesfully');
    }

    public function usersBan($slug)
    {
        $user = User::where('slug', $slug)->first();
        $user->delete();
        return redirect('user')->with('status', 'User Deleted Sucssesfully');
        //ini hapus data user
    }

    public function usersBanned()
    {
        $usersban = User::onlyTrashed()->get();
        return view('admin.usersBanned', ['usersban' => $usersban]);
        //ini nampilin data yg dihapus
    }

    public function usersRestored($slug)
    {
        $users = User::withTrashed()->where('slug', $slug)->first();
        $users->restore();
        return redirect('user')->with('status', 'User Restored Succsesfully');
    }

    public function category()
    {
        $categories = Category::all();
        return view('admin.category', ['categories' => $categories]);
    }

    public function categoryAdd ()
    {
        return view('admin.AddCategory');
    }

    public function categoryStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories',
        ]);

        $categories = Category::create($request->all());
        return redirect ('category')->with('status', 'Category Add Succesfully'); //return redirect ngambil dari route

    }

    public function categoryEdit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('admin.EditCategory', ['category' => $category]);
    }
    
    public function categoryUpdated(Request $request, $slug) {

        $validated = $request->validate([
            'name' => 'required|unique:categories',
        ]);
        $category = Category::where('slug', $slug)->first();
        $category->slug = null; //mengapdet di slug db nya
        $category->update($request->all());
        return redirect('category')->with('status', 'Category Update Succesfully');
        // dd($request->all());
    }

    //menghapus data
    public function categoryDestroy ($slug) {

        $category = Category::where('slug', $slug)->first();
        $category->delete();
        return redirect('category')->with('status', 'Category Delete Succesfully');
    }

    public function rent()
    {
        return view('admin.rent');
    }

    public function books()
    {
        $books = Book::all();
        return view('admin.books', ['books' => $books]);
    }

    public function booksAdd()
    {
        $categories = Category::all();
        $books = Book::all();
        return view('admin.Addbooks', ['books' => $books, 'categories' => $categories]);
    }

    public function booksStore(Request $request)
    {
        $validated = $request->validate([
            'book_code' => 'required',
            'title' => 'required',
        ]);

        $newName = '';
        if($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        $request['cover'] = $newName;
        $book = Book::create($request->all());
        $book->categories()->sync($request->categories);
        return redirect ('books')->with('status', 'Book Add Succesfully'); //return redirect ngambil dari route

    }

    public function booksEdit($slug)
    {
        $books = Book::where('slug', $slug)->first();
        $categories = Category::all();
        return view('admin.EditBooks', ['books' => $books, 'categories' => $categories]);
    }

    public function booksUpdated(Request $request, $slug) {

        if($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
            $request['cover'] = $newName;
        }
        
        $books = Book::where('slug', $slug)->first();
        $books->update($request->all());
        if($request->categories){
            $books->categories()->sync($request->categories);
        }
        return redirect('books')->with('status', 'Book Updated Succesfully');
    }

    public function booksDestroy ($slug) {

        $books = Book::where('slug', $slug)->first();
        $books->delete();
        return redirect('books')->with('status', 'Book list Delete Succesfully');
    }


    


}
