<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Collectors;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $cars = Cars::all();
        $collectors = Collectors::all();

        return view('home', [
            "cars" => $cars,
            "collectors" => $collectors
        ]);
    }
}
