<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Car;
use App\Models\User;
=======
>>>>>>> d31b216de56fc65efa4b782ba714561e21ad7f63
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $cars = User::find(1)
            ->cars()
            ->orderBy('created_at', 'desc')
            ->get();

        return view('car.index', ['cars' => $cars]);
=======
        return view('car.index');
>>>>>>> d31b216de56fc65efa4b782ba714561e21ad7f63
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
    public function show(Car $car)
    {
        return view('car.show', ['car' => $car]);
=======
    public function show(string $id)
    {
        return view('car.show');
>>>>>>> d31b216de56fc65efa4b782ba714561e21ad7f63
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('car.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search()
    {
<<<<<<< HEAD
        $query = Car::where('published_at', '<', now())->orderBy('published_at', 'desc');

        $carsCount = $query->count();

        $cars = $query->limit(30)->get();

        return view('car.search', ['cars' => $cars, 'carsCount' => $carsCount]);
    }

    public function watchlist()
    {
        $cars = User::find(4)->favouriteCars;

        return view('car.watchlist', ['cars' => $cars]);
=======
        return view('car.search');
>>>>>>> d31b216de56fc65efa4b782ba714561e21ad7f63
    }
}
