<?php

namespace App\Http\Controllers;

use Liveware;
use App\Models\Rank;
use App\Models\User;
use App\Models\UserRank;
use App\Models\Question;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::all();
        $question = Question::with('user','category')->latest()->get();
        $user = Auth::user();
        // $users = $user::with('userrank')->get();
        $points = range(10,110);
        $counts = count($points);




        return view('home',compact('category','question','points','counts'));
    }


    public function create(Request $request) {
        //  $user =  Auth::user()->id;
        //  $question = $request->question;
        //  $points = $request->point;
        //  $category = $request->category;

        $request->validate([
            'question' => 'required|min:10',
            'category' => 'required',
            'point' => 'required',
        ]);

         Question::create([
            'user_id' => Auth::user()->id,
            'title' => $request->question,
            'category_id'=>$request->category,
            'point' => $request->point,
         ]);

         return redirect('/');

    }


}