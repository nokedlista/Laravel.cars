<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BasicRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if ($this->method() === 'PATCH') {
            return ['name' => 'nullable|min:3|max:255'];
        }
        return [
            'name' => 'required|min:3|max:255',
            'registration_number' => 'required|min:7|max:7',
            'VIN' => 'required|min:17|max:17',
            'maker_ID' => 'required',
            'body_ID' => 'required',
            
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'A megnevezés kötelező mező!',
            'name.min' => 'Legalább 3 karakter legyen!',
            'name.max' => 'Legfeljebb 255 karakter legyen!',
            'registration_number.required' => 'A rendszám kötelező mező!',
            'registration_number.min' => 'A rendszám pontosan 7 karakter legyen!',
            'registration_number.max' => 'A rendszám pontosan 7 karakter legyen!',
            'VIN.required' => 'A jármű azonosító száma kötelező mező!',
            'VIN.min' => 'A jármű azonosító száma pontosan 17 karakter legyen!',
            'VIN.max' => 'A jármű azonosító száma pontosan 17 karakter legyen!',
            'maker_ID.required' => 'A gyártó ID-je kötelező mező!',
            'body_ID.required' => 'Az alváz ID-je kötelező mező!'
        ];
    }
}
