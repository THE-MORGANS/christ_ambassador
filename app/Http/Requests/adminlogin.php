<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
class adminlogin extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'userdetail' =>'required|regex:/^[a-zA-Z0-9@.  ]*$/',
            'password'=>['required', 'string', Password::min(8)->letters()->numbers()->symbols()],
        ];
    }
}
