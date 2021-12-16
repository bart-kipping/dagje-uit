<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CarController extends Controller
{
    public function index()
    {
        return Inertia::render('Test', [
            'users' => User::simplePaginate(5),
        ]);
    }

    public function show(Request $request, User $user) 
    {
        Return Inertia::render('User/Show', [
            'user' => $user,
        ]);
    }
}
