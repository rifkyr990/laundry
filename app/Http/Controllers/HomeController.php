<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function article()
    {
        $articles = Article::all();
        return view('home', compact('articles'));
    }

    public function read()
    {
        return view('article.article1');
    }

    public function read2()
    {
        return view('article.article2');
    }

    public function read3()
    {
        return view('article.article3');
    }

    public function about()
    {
        return view('about');
    }

    public function lacak(Request $request) {
        $orderId = $request->input('order_id');
        $product = Product::where('id', $orderId)->first();

        if ($product) {
            return view('home', ['product' => $product]);
        } else {
            return view('home', ['product' => null]);
        }
    }
}
