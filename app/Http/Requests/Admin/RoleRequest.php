<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class RoleRequest extends FormRequest
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
            'name'          => 'required|max:200',
            'display_name'  => 'required|max:200',
            'desc'          => 'required|max:500',
        ];
    }

    public function messages()
    {
        return [
                'name.required' => 'Role name field is required.',
                'display_name.required' => 'Role display name field is required.',
                'desc.required' => 'Role description field is required.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(redirect()->back()->withErrors($validator->errors())->withInput());
    }
}
