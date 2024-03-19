<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     *  returns view of all the movies recovered from database as a parameter
     */
    public function index(){

        $movies = Movie::all();
        return view("home", compact("movies"));
    }

    /**
     * returns view of the details of a specific movie
     */
    public function movie_details(){
        

        return view("movie_details");
    }



}
