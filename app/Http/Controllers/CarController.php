<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::orderBy('created_at', 'ASC')
                ->where(function($query) {
                    return $query = $query->orWhere('name', 'LIKE', '%'. request()->search . '%');
                })
                ->get()
                ->paginate(6);
        return view('cars.car', compact('cars'));
    }
}
