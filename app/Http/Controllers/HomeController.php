<?php

namespace App\Http\Controllers;

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
        $question = Question::with('user')->get();
        $points = range(10,110);
        $counts = count($points);




        return view('home',compact('category','question','points','counts'));
    }


    public function create(Request $request) {
         $user = Auth::user()->id;
         $question = $request->question;
         $points = $request->point;
         Question::create([
            'user_id' => $user,
            'title' => $question,
            'point' => $points,
         ]);

         return redirect('/');
      
    }


}