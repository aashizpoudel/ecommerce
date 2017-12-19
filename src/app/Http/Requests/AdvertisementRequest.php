<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdvertisementRequest extends Request {

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
    public function rules() {
        return [
            'advertiser' => 'required|max:75|min:3',
            'link' => 'required|max:2500',
            'expires' => 'required|date',
            'banner' => 'required|mimes:jpeg,jpg,png,bmp',
        ];
    }

}