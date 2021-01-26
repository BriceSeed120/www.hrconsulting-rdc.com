<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerCreatedRequest extends FormRequest
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
            'title' => 'bail|required|string|max:191',
            'description' => 'bail|nullable|string',
            'banner' => 'bail|required|mimes:jpeg,png,jpg,gif,svg'
        ];
    }
}
