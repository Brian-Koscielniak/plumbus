<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
  public function home()
  {
    return view('home');
  }

  public function about()
  {
    return view('about');
  }

  public function news()
  {
    $news = [
      "This is a news",
      "Oh look, I founda penny",
      "This just in! News ins't like it used to be"
    ];
    return view('news', compact('news'));
  }

  public function events()
  {
    return view('events');
  }
}
