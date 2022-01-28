<?php

namespace App\Http\Controllers;

use App\Models\Songs\Song;
use App\Services\SongServices;
use Illuminate\Http\Request;

class SongController extends Controller
{
    protected $songs;

    public function __construct(SongServices $songs)
    {
        $this->songs = $songs;
    }
    public function addSongs(Request $request)
    {
        $this->songs->addSongs($request);
        return response()->json(['success' => 'Your Record has been successfully stored!']);
    }
    public function allSongs()
    {
        $songs = Song::all();
        return response()->json($songs);
    }
}
