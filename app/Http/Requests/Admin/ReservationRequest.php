<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'first_name' => 'required',
      'last_name' => 'required',
      'tel' => 'required',
      'email' => 'required,email',
      'address' => 'required',
      'quantity' => 'required,integer',
      'date_reserve' => 'required,date',
    ];
  }

  public function messages()
  {
    # code...
  }
}
