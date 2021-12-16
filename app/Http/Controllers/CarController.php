<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationCreateRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Cars', [
            'cars' => Car::simplePaginate(5),
        ]);
    }

    public function create()
    {
        //
    }


    public function show(Car $car) 
    {
        Return Inertia::render('CarForm', [
            'car' => $car,
            'users' => fn () => User::select(['id', 'name'])->get()
        ]);
    }
    
    public function store(ReservationCreateRequest $request): RedirectResponse  
    {       
        $reservation = Reservation::create($request->validated());

        return Redirect::route('cars.index')->with("message", "Reservation made");
    }

    public function edit(Car $car)
    {
        //
    }

    public function update(UpdateCarRequest $request, Car $car)
    {
        //
    }

    public function destroy(Car $car)
    {
        //
    }
}
