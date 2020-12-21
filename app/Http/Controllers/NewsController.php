<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class NewsController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['only' => ['create']]);
        
        
    }
    
    public function index()
    {
        $data['news'] = News::orderby('id','desc')->get();
        return view('work.home',$data);
    }

    
    public function create()
    {
        $data['news'] = News::all();
        return view('work.insert',$data);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:news',
            'author' => 'required',
            'body' => 'required',
            'summary' => 'required',
            'cover' => 'required'
        ]);

        $filename = time() . "." . $request->cover->extension();
        $request->cover->move(public_path("cover"),$filename);
        $slug = Str::of($request->title)->slug('-');

        $n = new News();

        $n->title = $request->title;
        $n->author = $request->author;
        $n->body = $request->body;
        $n->summary = $request->summary;
        $n->user_id = Auth::id();
        $n->cover = $filename;
        $n->slug = $slug;
        $n->save();
        return redirect()->route('news.index');
    }

    
    public function show(News $news)
    {
        $data['news'] = $news;
        return view('work.viewNews',$data);
    }

    
    public function edit(News $news)
    {
        //
    }

    
    public function update(Request $request, News $news)
    {
        //
    }

    
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->back();
    }
}
