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

    public function show($id)
    {
        // $car = Cars::find($id);
        // parse int
        $id = (int)$id;
        $car = Cars::where("id", $id)->first();

        return view("cars.show", compact("car"));
    }

    public function create()
    {
        return view("cars.create");
    }

    public function store(Request $request)
    {
        //get the last inserted 
        $id = Cars::orderBy("id", "desc")->first()->id;

        $car = new Cars();
        $car->id = $id + 1;
        $car->code = $request->code;
        $car->manufacturer = $request->manufacturer;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->save();
        return redirect('/cars');
    }

    public function destroy($id)
    {
        // parse int
        $id = (int)$id;
        $car = Cars::where("id", $id)->first();
        $car->delete();
        return redirect('/cars');
    }
}
