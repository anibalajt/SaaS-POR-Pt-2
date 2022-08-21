<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Collectors;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;


class CarController extends Controller
{

    public function __construct()
    {
        // Middleware
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        // get the collectors for this car
        $collectors = $this->getCollectorsByCar($code);


        return view("cars.show", [
            "car" => $car,
            "collectors" => $collectors
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cars.create");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function edit($code)
    {
        $car = Cars::where("code", $code)->first();
        return view("cars.edit", [
            "car" => $car
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $code)
    {
        $car = Cars::where("code", $code)->first();
        $car->code = $request->code;
        $car->manufacturer = $request->manufacturer;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->save();
        return redirect('/cars');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function destroy($code)
    {
        $car = Cars::where("code", $code)->first();
        $car->delete();
        return redirect('/cars');
    }

    public function getCollectorsByCar($code)
    {
        // $car = Cars::where("code", $code)->first();
        $collectors = Collectors::whereIn('owned', [$code])->get();
        // $car->collectors = $collectors;
        return  $collectors;
    }
    // search for cars by manufacturer, model
    public function search(Request $request)
    {
        $cars = Cars::where('manufacturer', 'like', '%' . $request->search . '%')
            ->orWhere('model', 'like', '%' . $request->search . '%')
            ->get();
        // if request empty, return all cars
        if (empty($request->search)) {
            $cars = Cars::all();
        }
        return view("cars.index", [
            "cars" => $cars
        ]);
    }
}
