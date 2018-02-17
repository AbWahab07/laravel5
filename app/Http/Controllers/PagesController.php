<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
    public function index(){
        // 1- Return a string.
        //return 'Home';

        // 2- Return a view
        //return view('pages.home');

        // 3- Passing data to views
        $tasks = ['Go to the shop', 'Take away', 'Bring food'];
        $name = 'Abdul';

        // 3.1- Pass array of data as a second argument
        //return view('pages.home', ['name' => $name, 'tasks' => $tasks]);


        // 3.2- Pass array using php compact method
        // Recommended
        // this will only work if you pass the same names to compact method as the names of the variables
        // e.g $tasks as tasks and $name as name
        // Ueeful if you're using same names/variables in the blade file as name of the variable passed.
        //return view('pages.home', compact('name', 'tasks'));

        // 3.3- Chain with() method
        // Not recommended though.
        //return view('pages.home')->with('name', $name)->with('tasks',$tasks);

        // 3.4- Chaining of dynamic methods
        // withName or withTasks methods doesn't exist in Laravel.
        // However, Laravel is smart enough to detect that we're trying to pass a Key here.
        return view('pages.home')->withName($name)->withTasks($tasks);

    }

    public function about(){
        //return 'A little about me';
        return view('pages.about');
    }

}
