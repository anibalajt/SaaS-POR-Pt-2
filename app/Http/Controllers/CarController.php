<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;


class CarController extends Controller
{

    public function __construct()
    {
        // Middleware
        $this->middleware('auth');
    }

    public function index()
    {
        $cars = Cars::all();


        return view("cars.index", [
            "cars" => $cars
        ]);
    }

    public function show($code)
    {
        $car = Cars::where("code", $code)->first();
        return view("cars.show", [
            "car" => $car
        ]);
    }


    public function create()
    {
        return view("cars.create");
    }

    public function store(Request $request)
    {

        $car = new Cars();
        $car->code = $request->code;
        $car->manufacturer = $request->manufacturer;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->save();
        return redirect('/cars');
    }

    public function destroy($code)
    {
        $car = Cars::where("code", $code)->first();
        $car->delete();
        return redirect('/cars');
    }
}
