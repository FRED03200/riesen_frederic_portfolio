<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MyAchievementsRequest extends FormRequest
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
            'id_user'              => 'bail|required',
            'title'                => 'bail|required',
            'date_creation'        => 'bail|required',
   //         'image'                => 'bail|required',
            'descriptive'          => 'bail|required'
        ];
    }
}