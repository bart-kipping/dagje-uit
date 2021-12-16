<?php

namespace App\Http\Requests;

use App\Rules\CarCannotBeReserved;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ReservationCreateRequest extends FormRequest
{
  
    public function rules()
    {
        return [
            'reservation_date' => ['required', 'date', 'after:yesterday'],
            'car_id' => ['required', 'integer', Rule::exists('cars', 'id'), new CarCannotBeReserved],
            'user_id' => ['required', 'integer', Rule::exists('users', 'id')],
        ];
    }
}
