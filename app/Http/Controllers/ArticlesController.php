<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Article;
use App\Commande;
use App\User;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'clearance'])->except('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['articles'] = Article::orderBy('created_at','desc')->paginate(3);
        return view('articles.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //handle file upload
        if($request->hasFile('cover_image')){
            //Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalname();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $article = new Article;
        $article->name = $request->input('name');
        $article->prix = $request->input('prix');
        $article->description = $request->input('description');
        $article->category = $request->input('category');
        $article->cover_image = $fileNameToStore;
        $article->user_id = Auth()->user()->id;
        $article->save();
        return redirect()->route('articles.index')->with('success','Article created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arr['article'] = Article::find($id);
        return view('articles.show')->with($arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $arr['article'] = Article::find($id);
        return view('articles.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //handle file upload
        if($request->hasFile('cover_image')){
            //Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalname();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }
        $article = Article::find($id);
        $article->name = $request->input('name');
        $article->prix = $request->input('prix');
        $article->description = $request->input('description');
        $article->category = $request->input('category');
        if($request->hasFile('cover_image')){
            $article->cover_image = $fileNameToStore;
        }
        $article->save();
        return redirect()->route('articles.index')->with('success','Article updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);

        if($article->cover_image != 'noimage.jpg'){
            //Delete Image
            Storage::delete('public/cover_images/'.$article->cover_image);
        }
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article Removed');
    }
}
