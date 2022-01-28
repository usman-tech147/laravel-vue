<?php


namespace App\Services;


use App\Models\Songs\Song;

class SongServices
{
    public function addSongs($request)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
            'image' => 'required',
        ]);
        $songs = new Song();
        $songs->title = $request->title;
        $songs->song_url = $request->url;
        $songs->image = $request->file('image')->getClientOriginalName();
        $songs->save();
    }
}
