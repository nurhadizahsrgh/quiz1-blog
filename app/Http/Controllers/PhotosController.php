<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use App\Models\Post;

class PhotosController extends Controller
{

    public function index()
    {
        $rows = Photos::all();
        return view('photos.index', compact('rows'));
    }

    public function create()
    {
        $lst = Post::all();
        return view('photos.add', compact('lst'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photos_date' => 'required',
            'photos_title' => 'required',
            'photos_text' => 'required',
            'photos_post_id' => 'required'
        ],
        [
           'photos_date.required' => 'Tanggal wajib diisi',
           'photos_title.required' => 'Judul wajib diisi',
           'photos_post_id.required' => 'Wajib diisi'
        ]);
        Photos::create([
            'photos_date' => $request->photos_date,
            'photos_title' => $request->photos_title,
            'photos_text' => $request->photos_text,
            'photos_post_id' => $request->photos_post_id

        ]);

        return redirect('/photos');
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
        $row = Photos::findOrFail($id);
        $lst = Post::all();

        return view('photos.edit', compact('row', 'lst'));
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
            'photos_date' => 'required',
            'photos_title' => 'required',
            'photos_text' => 'required',
            'photos_post_id' => 'required'
        ],
        [
           'photos_date.required' => 'Tanggal wajib diisi',
           'photos_title.required' => 'Judul wajib diisi',
           'photos_post_id.required' => 'Wajib diisi'
        ]);
            
            $row = Photos::findOrFail($id); 
            $row->update([
            'photos_date' => $request->photos_date,
            'photos_title' => $request->photos_title,
            'photos_text' => $request->photos_text,
            'photos_post_id' => $request->photos_post_id
            ]);
    
            return redirect('/photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Photos::findorFail($id);
        $row->delete();

        return redirect('/photos');
    }
}
