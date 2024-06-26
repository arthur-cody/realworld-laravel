<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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

        return [
            'article.title' => ['required', 'string', 'max:255'],
            'article.description' => ['nullable', 'string'],
            'article.body' => ['required', 'string'],
            'article.tagList' => ['required', 'array'],
        ];
    }
}
