<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=> 'required',
            "email"=>"email|required",
            "image"=>"image",
            "phone_number"=>"required|numeric|min:10|max:10",




        ];
    }
    public function message():array{
        return[

            "name.required"=>"Please enter the password",
            "email.required"=>"Please enter email",
            "email.email"=>"Email Format",
            "phone_number.max"=>"Number should be of 10 digits"
        ];


    }
}
