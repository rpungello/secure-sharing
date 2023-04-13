<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SecretRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'value' => ['required'],
            'recipient_email' => ['nullable', 'email', 'max:254'],
            'expires_at' => ['required', 'date'],
        ];
    }
}
