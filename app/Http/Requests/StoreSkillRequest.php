<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Http\FormRequest;

class StoreSkillRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(Request $request): array
    {
        #dd($request->all());
        return [
            'name'  => [
                'required'
            ],
            'progression'  => [
                'required'
            ],
            'progression_color'  => [
                'required'
            ],
        ];
    }
}
