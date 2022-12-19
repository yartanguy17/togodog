<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'title' => 'required',
      'summary' => 'required',
      'cat_id' => 'required',
      'description' => 'nullable',
      'brand_id' => 'nullable|exists:brands,id',
      'child_cat_id' => 'nullable|exists:categories,id',
      // 'is_featured' => 'sometimes|in:1',
      'status' => 'required|in:active,inactive',
      // 'condition' => 'required|in:default,new,hot',
      'price' => 'required|numeric',
      'discount' => 'nullable|numeric'
    ];
  }


  public function messages()
  {
    return [
      'boutique_id.required' => 'Boutique est obligatoire.',
      'title.required' => 'Nom est obligatoire.',
      'summary.required' => 'summary est obligatoire.',
      // 'stock.required' => 'Stock est obligatoire.',
      'cat_id.required' => 'Catégorie est obligatoire.',
      'status.required' => 'Status est obligatoire.',
    ];
  }
}
