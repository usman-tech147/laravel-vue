<?php

namespace App\Http\Controllers;

use App\Models\Artist\Artist;
use App\Services\ArtistServices;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    protected $artist;

    public function __construct(ArtistServices $artist)
    {
        $this->artist = $artist;
    }

    public function getImagePath(Request $request)
    {
        $image = $request->file('image');
        $new_name = $image->getClientOriginalName();
        $image->move(public_path('uploads'), $new_name);
        $path = asset('uploads') . '/' . $new_name;
        return response()->json($path);
    }
    public function addArtists(Request $request)
    {
        $this->artist->addArtist($request);
        return response()->json(['success' => 'Your Record has been successfully stored!']);
//        try {
//            $this->artist->addArtist($request);
//            return response()->json(['success' => 'Your Record has been successfully stored!']);
//        } catch (\Exception $e) {
//            return response()->json(['error', 'Something Went Wrong!']);
//        }
    }

    public function allArtists()
    {
        $artists = Artist::all();
        return response()->json($artists);
    }
    public function editArtists($id)
    {
        $artists = Artist::find($id);
        return response()->json($artists);
    }
    public function updateArtists(Request $request,$id)
    {
        $this->artist->updateArtists($request,$id);
        return response()->json(['success' => 'Your Record has been updaated successfully!']);
//        try {
//            $this->artist->addArtist($request);
//            return response()->json(['success' => 'Your Record has been successfully stored!']);
//        } catch (\Exception $e) {
//            return response()->json(['error', 'Something Went Wrong!']);
//        }
    }

    public function deleteArtist($id)
    {
        $artist = Artist::find($id);
        $artist->delete();
        return response()->json(['success' => 'Your Record has been successfully deleted']);
    }
}
