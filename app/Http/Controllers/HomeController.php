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


        $cars = Car::query()
            ->where('published_at', '<', now())
            ->orderByDesc('published_at')
            ->limit(30)
            ->get();

        return view('home.index', ['cars' => $cars]);
    }
}
