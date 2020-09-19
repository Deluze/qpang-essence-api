<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:4', 'max:16', 'unique:users,name', 'regex:/^[a-z0-9\!\@\#\$\%\^\&\*\(\)\-\_\=\+\[\]\{\}\<\>\,\.\|]+$/i'],
            'nickname' => ['required', 'string', 'min:4', 'max:16', 'unique:players,name', 'regex:/^[a-z0-9\!\@\#\$\%\^\&\*\(\)\-\_\=\+\[\]\{\}\<\>\,\.\|]+$/i'],
            'password' => ['required', 'string', 'min:4', 'max:16', 'confirmed'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users,email'],
            'recaptcha' => ['required', 'string'],
            'code' => ['nullable', 'string', 'max:191'],
        ];
    }
}
