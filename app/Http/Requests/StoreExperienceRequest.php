<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Http\FormRequest;

class StoreExperienceRequest extends FormRequest
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
        return [
            'poste'  => [
                'required'
            ],
            'entreprise'  => [
                'required'
            ],
            'date_debut'  => [
                'required'
            ],
            'date_fin'  => [
                'required'
            ],
            'statut'  => [
                'required'
            ],
        ];
    }
}
