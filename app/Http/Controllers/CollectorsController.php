<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Collectors;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\each;

class CollectorsController extends Controller
{
    protected $methods = [
        'store',
        'update',
        'destroy'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collectors = Collectors::all();
        return view("collectors.index", [
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
        // find all cars a return code field only
        $cars = Cars::all(['code']);
        return view("collectors.create", [
            "cars" => $cars
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $collector = new Collectors();
        $collector->given_name = $request->given_name;
        $collector->family_name = $request->family_name;
        $collector->quantity = $request->quantity;
        $collector->owned = $request->owned;
        $collector->save();
        return redirect('/collectors');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collectors  $collectors
     * @return \Illuminate\Http\Response
     */
    public function show(Collectors $collectors)
    {
        return view("collectors.show", [
            "collector" => $collectors
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collectors  $collectors
     * @return \Illuminate\Http\Response
     */
    public function edit(Collectors $collectors)
    {
        return view("collectors.edit", [
            "collector" => $collectors
        ]);
    }

    public function getCollectorWithCars($id)
    {
        $collector = Collectors::find($id);
        $cars = Cars::whereIn('code', $collector->owned)->get();
        $collector->cars = $cars;
        return $collector;
    }
}
