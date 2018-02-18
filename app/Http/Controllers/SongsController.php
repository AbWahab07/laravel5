<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
//use DB;
use App\Song;

class SongsController extends Controller {

	//
    public function index(Song $song){
        //$songs = $this->getSongs();
        $songs = $song->get(); // Using Method Injection
        return view('songs.home', compact('songs'));
    }

    public function show(Song $song){
        // $song = DB::table('songs')->find($id);
        // $song = Song::whereHandle($handle)->first();

        return view('songs.show', compact('song'));
    }

    // Method Injection
    public function getSongs(Song $song){
        // return DB::table('songs')->get(); / Using DB Facade

        // return Song::get(); / Using Facade
        //return Song::all();
    }

    /**
     * @return \Illuminate\View\View
     *  Creates a form to add a new Song
     */

    public function create(){
        return view('songs.create');
    }

    /**
     * @param Song $song
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * Add song in the database
     */
    public function store(Song $song, CreateSongRequest $request){
        $song->create($request->all());
        return redirect()->route('songs_path');
    }

    public function edit(Song $song){
        //return "You're editing " . $song->title;
        return view('songs.edit', compact('song'));
    }

    public function update(Song $song, Request $request){
        dd(Request::input());
        $song->fill(['title' => $request->get('title')])->save();
        return redirect('songs');
    }

    public function destroy(Song $song){
        $song->delete();
        return view('songs.home');
    }

}
