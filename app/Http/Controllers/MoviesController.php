<?php

namespace App\Http\Controllers;

use App\Models\MdCategory;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    function index()
    {
        $movies = http::get('https://api.themoviedb.org/3/movie/now_playing?page=1&api_key=' . Config::get('constant.api_key'));
        $data = json_decode($movies->body(), true);

        $category = MdCategory::all();

        return view('movies.homepage', $data, compact('category'));
    }
}
