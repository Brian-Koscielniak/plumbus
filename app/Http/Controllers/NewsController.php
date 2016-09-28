<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\News;

class NewsController extends Controller
{
  public function index()
  { // Method to retrieve and send all news articles to News page
      $news = News::get();
      return view('news', compact('news'));
  }

  public function show(News $news)
  { // Method to retrieve one specific Article
      return view('news.index', compact('news'));
  }

  public function store(News $news, Request $request)
  { // Mehtod to store an Article into database
      $news->create($request->all());
      // $news->images()->create(['file_name'=>'plumbs.jpg']); // How can we associate data to a record which 'id' is unknown?
      return back();
  }

  public function edit(News $news)
  { // Method to display edit news articles form view
      return view('news.edit', compact('news'));
  }

  public function update(News $news, Request $request)
  { // Method to update a given news article
      $news->update($request->all());
      return view('news.index', compact('news'));
  }

  public function delete(News $news)
  { // Method to delete a given news article
      $news->delete();
      return redirect()->action('NewsController@index'); // this on is good. yes. memorize this.
  }
}
