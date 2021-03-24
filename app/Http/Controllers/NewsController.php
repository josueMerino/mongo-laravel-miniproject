<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view("news.index", compact("news"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("news.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'topic' => 'required',
            'image' => 'nullable|image',
            'description' => 'required',
            'author' => 'required',
        ]);

        $notice = News::create($request->all());
        
        if($request->file('image'))
        {
            $notice->image = $request->file('image')->store('news', 'public');
            $notice->save();
        }

        return redirect()->route('news.index')
            ->with('success', 'Notice created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        request()->validate([
            'title' => 'string',
            'topic' => 'required',
            'image' => 'nullable|image',
            'description' => 'required',
            'author' => 'required',
        ]);


        $news->update($request->all());


        if ($request->file('image')) 
        {
            Storage::disk('public')->delete($news->image);
            $news->image = $request->file('image')->store('news', 'public');
            $news->save();
        }

        return redirect()->route('news.index')
        ->with('success', 'Notice updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();


        return redirect()->route('news.index')
            ->with('success', 'News deleted successfully');
    }

    public function searchNoticeByTopic(Request $request)
    {
         // Get the search value from the request
        $search = $request->input('topic');
        $searchTitle = $request->input('title');

        $news = News::where('topic', $search)
                ->orWhere('title', "%{$searchTitle}%")
                ->get();

        // Return the search view with the resluts compacted
        return view('news.search', compact('news'));
    }
}
