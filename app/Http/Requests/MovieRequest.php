<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'duration' => 'required',
            'synopsis' => 'required',
            'trailer' => 'required',
            'year' => 'required',
            'poster' => 'required',
            'director_id' => 'required',
            'country_id' => 'required',

            // 'name' => 'required|min:5|max:255'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
            'name.required' => "Se necesita un nombre para la película",
            'duration.required' => "Se necesita un duración para la película",
            'synopsis.required' => "Se necesita una sinopsis para la película",
            'trailer.required' => "Se necesita un trailer para la película",
            'year.required' => "Se necesita un año para la película",
            'poster.required' => "Se necesita un poster para la película",
            'director_id.required' => "Se necesita un director para la película",
            'country_id.required' => "Se necesita un país para la película",
        ];
    }
}
