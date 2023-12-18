<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            // "first_name" => ["required"],
            // "last_name" => ["required"],
            // "email" => ["required", "email"],
            // "phone" => ["required"],
            // "country" => ["required"],
            // "state_division" => ["required"],
            // "address_line1" => ["required"],
            // "address_line2" => ["string"],
            // "postal_code" => ["integer"],
            // "company" => ["required"],
        ];
    }
}
