<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;


class AlbumRequest extends FormRequest
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
    public function rules(Request $request)
    {
        if($request->method() == 'POST' ){
            return [
                'img'       => 'required|image|mimes:png,jpg,jpeg,svg',
                'title'     => 'required|max:200',
                'price'     => 'required|numeric',
                'discount'  => 'nullable|numeric|max:100',
                'status'    => 'required',
            ];
        }else{
            return [
                'img'       => 'nullable|image|mimes:png,jpg,jpeg,svg',
                'title'     => 'required|max:200',
                'price'     => 'required|numeric',
                'discount'  => 'nullable|numeric|max:100',
                'status'    => 'required',
            ];
        }
    }

    public function messages()
    {
        return [
            'img.required'      => 'Movie image field is required.',
            'img.required'      => 'Movie image field must be image.',
            'img.mimes'         => 'Movie image must be one those extensions:jpg, png, jpeg.',
            'title.required'    => 'Movie title field is required.',
            'title.max'         => 'Movie title field maximum length is 200 character.',
            'price.required'    => 'Movie price field is required.',
            'discount.numeric'  => 'Movie discount field must be numeric.',
            'discount.max'      => 'Movie maximum discount rate is 100.',
            'status.required'   => 'Movie status field is required.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(redirect()->back()->withErrors($validator->errors())->withInput());
    }
}
