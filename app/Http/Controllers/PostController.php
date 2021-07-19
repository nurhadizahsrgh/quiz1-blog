<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{

    public function index()
    {
        $rows = Post::all();
        return view('post.index', compact('rows'));
    }

    public function create()
    {
        $lst = Category::all();
        return view('post.add', compact('lst'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_date' => 'required',
            'post_slug' => 'required',
            'post_title' => 'required',
            'post_text' => 'required',
            'post_cat_id' => 'required'
        ],
        [
           'post_date.required' => 'Tanggal wajib diisi',
           'post_title.required' => 'Judul wajib diisi',
           'post_cat_id.required' => 'Wajib diisi'
        ]);
        Post::create([
            'post_date' => $request->post_date,
            'post_slug' => $request->post_slug,
            'post_title' => $request->post_title,
            'post_text' => $request->post_text,
            'post_cat_id' => $request->post_cat_id

        ]);

        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Post::findOrFail($id);
        $lst = Category::all();

        return view('post.edit', compact('row', 'lst'));
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
       $request->validate([
            'post_date' => 'required',
            'post_slug' => 'required',
            'post_title' => 'required',
            'post_text' => 'required',
            'post_cat_id' => 'required'
        ],
        [
           'post_date.required' => 'Tanggal wajib diisi',
           'post_title.required' => 'Judul wajib diisi',
           'post_cat_id.required' => 'Wajib diisi'
        ]);
            
            $row = Post::findOrFail($id); 
            $row->update([
                'post_date' => $request->post_date,
            'post_slug' => $request->post_slug,
            'post_title' => $request->post_title,
            'post_text' => $request->post_text,
            'post_cat_id' => $request->post_cat_id
            ]);
    
            return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Post::findorFail($id);
        $row->delete();

        return redirect('/post');
    }
}
