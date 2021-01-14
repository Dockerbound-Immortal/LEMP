<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Api\ApiRequest;

class CreateTennisCourtRequest extends ApiRequest
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
            'name' => 'required|string|min:3|max:254',
            'description' => 'required|string|min:3|max:254',
            'num_of_courts' => 'required|numeric|between:1,10000',
        ];
    }
}
