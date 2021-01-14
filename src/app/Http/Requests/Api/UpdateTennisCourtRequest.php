<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Api\ApiRequest;

class UpdateTennisCourtRequest extends ApiRequest
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
            'name' => 'string|min:3|max:254',
            'description' => 'tring|min:3|max:254',
            'num_of_courts' => 'numeric|between:1,10000',
            'free_access' => 'in:free,partial,paid',
            'num_of_courts' => 'integer|min:1|max:10000', 
            'disabled_access' => 'in:none,partial,full',
            'court_surface_id' => 'uuid|exists:court_surfaces,id',
        ];
    }
}
