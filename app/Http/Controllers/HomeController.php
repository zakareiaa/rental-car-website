<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeature;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use Illuminate\Http\Request;
use function Pest\Laravel\json;

class HomeController extends Controller
{
    public function index() {


        $cars = Car::with('maker', 'model', 'carType', 'fuelType', 'user', 'city')->get();



//        $makers = Maker::with('models')->get();
//        dump($makers->toArray());

//        Car::factory()->count(10)->create();

        return view('home.index', compact('cars'));
    }
}
