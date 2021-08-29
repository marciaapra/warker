<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PostoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'cidade_id'         => ['required', 'exists:cidades,id'],
            'reservatorio'      => ['required', 'numeric'],
            'latitude'          => ['required', 'numeric'],
            'longitude'         => ['required', 'numeric'],
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'cidade_id.required'    => 'Cidade é obrigatório',
            'cidade_id.exists'      => 'Cidade não está cadastrada',
            
            'reservatorio.required' => 'Reservatório é obrigatório',
            'reservatorio.numeric'  => 'Reservatório precisa ser um número',

            'latitude.required'     => 'Latitude é obrigatório',
            'latitude.numeric'      => 'Latitude precisa ser um número',
            
            'longitude.required'    => 'Longitude é obrigatório',
            'longitude.numeric'     => 'Longitude precisa ser um número',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        $response = response()->json([
            'message' => 'Dados inválidos',
            'details' => $errors->messages(),
        ], 422);
    
        throw new HttpResponseException($response);
    }
}