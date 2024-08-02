<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $products = Product::where('is_available', true)->with('category')->get();
        $socialMedia = SocialMedia::all();
        $categories = Category::pluck('name');

        return view('app', compact('socialMedia', 'products', 'categories'));
    }

    public function send(Request $request)
    {
        $message = $request->message ?? 'Hallo, Charissa Florist.';
        $message = urlencode($message);
        $url     = 'https://wa.me/62881037188223?text=' . $message;
        return redirect($url);
    }
}
