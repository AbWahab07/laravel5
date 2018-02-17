<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
//use DB;
use App\Song;

class SongsController extends Controller {

	//
    public function index(){
        $songs = $this->getSongs();
        return view('songs.home', compact('songs'));
    }

    public function show($handle){
        //$song = DB::table('songs')->find($id);
        $song = Song::whereHandle($handle)->first();
        return view('songs.show', compact('song'));
    }

    public function getSongs(){
        // return DB::table('songs')->get();
        // return Song::get();
        return Song::all();
    }

}
