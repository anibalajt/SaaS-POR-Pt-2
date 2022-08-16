<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;


class CarController extends Controller
{
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

        return view("cars.show",compact("car"));
    }

    public function create()
    {
        return view("cars.create");
    }

    public function store(Request $request)
    {
        // get the next id from mongo to create a new car
        $id = Cars::all()->count() + 1;
        $car = new Cars();
        $car->id = $id;
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
