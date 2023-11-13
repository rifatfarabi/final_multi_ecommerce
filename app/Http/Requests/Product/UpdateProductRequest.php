<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "name" =>["required"],
            "unit" =>["required","integer"],
            "purchase_qty" =>["required", "integer"],
            "thumbnail_image" =>["mimes:jpg,jpeg,png,gif"],
            "unit_price" =>["required","integer"],
            "quantity" =>["required","integer"],
        ];
    }
}
