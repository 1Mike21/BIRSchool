<?php

namespace App\Http\Requests\Group;

use Illuminate\Foundation\Http\FormRequest;

class StoreGroupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
      return auth('web')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
      return [
        'title' => ['required', 'string', 'max:255'],
        'icon' => ['required', 'mimes:jpg,jpeg,png,svg', 'max:5120'],
        'description' => ['required', 'min:5', 'max:1000'],
        'is_active' => ['nullable', 'boolean'],
        'level' => ['required', 'string', 'max:255',],
      ];
    }
}
