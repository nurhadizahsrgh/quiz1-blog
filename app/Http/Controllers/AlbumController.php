<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Photos;

class AlbumController extends Controller
{

    public function index()
    {
        $rows = Album::all();
        return view('album.index', compact('rows'));
    }

    public function create()
    {
        $lst = Photos::all();
        return view('album.add', compact('lst'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'album_name' => 'required',
            'album_text' => 'required',
            'album_photos_id' => 'required'
        ],
        [
           'album_name.required' => 'Tanggal wajib diisi',
           'album_photos_id.required' => 'Wajib diisi'
        ]);
        Album::create([
            'album_name' => $request->album_name,
            'album_text' => $request->album_text,
            'album_photos_id' => $request->album_photos_id

        ]);

        return redirect('/album');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $row = Album::findOrFail($id);
        $lst = Photos::all();

        return view('album.edit', compact('row', 'lst'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'album_name' => 'required',
            'album_text' => 'required',
            'album_photos_id' => 'required'
        ],
        [
            'album_name.required' => 'Tanggal wajib diisi',
            'album_photos_id.required' => 'Wajib diisi'
        ]);
            
            $row = Album::findOrFail($id); 
            $row->update([
            'album_name' => $request->album_name,
            'album_text' => $request->album_text,
            'album_photos_id' => $request->album_photos_id
            ]);
    
            return redirect('/album');
    }

    public function destroy($id)
    {
        $row = Album::findorFail($id);
        $row->delete();

        return redirect('/album');
    }
}
