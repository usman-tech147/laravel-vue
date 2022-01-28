<?php


namespace App\Services;


use App\Models\Artist\Artist;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class ArtistServices
{
    public function getImage($request)
    {
        $image = $request->file('image');
        $new_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('pictures'), $new_name);
        $path = asset('pictures') . '/' . $new_name;
        return response()->json($path);
    }

    public function addArtist($request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'facebook_url' => 'required',
            'instagram_url' => 'required',
            'image' => 'required',
        ]);
        $artist = new Artist();
        $artist->first_name = $request->first_name;
        $artist->last_name = $request->last_name;
        $artist->facebook_url = $request->facebook_url;
        $artist->instagram_url = $request->instagram_url;
        $artist->image = $request->file('image')->getClientOriginalName();
        $artist->save();
    }

    public function updateArtists($request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'facebook_url' => 'required',
            'instagram_url' => 'required',
            'image' => 'required',
        ]);
        $artist = Artist::find($id);
        $artist->first_name = $request->first_name;
        $artist->last_name = $request->last_name;
        $artist->facebook_url = $request->facebook_url;
        $artist->instagram_url = $request->instagram_url;
        $artist->image = $request->image;
        $artist->save();
    }

}
