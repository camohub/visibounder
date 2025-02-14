<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ResetPasswordLoginRequest extends FormRequest
{

    protected $errorBag = 'login';

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
     * @return array
     */
    public function rules(): array
    {
        return [
            'reset_password_token' => ['required', 'string'],
        ];
    }
}
