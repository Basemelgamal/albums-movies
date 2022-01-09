<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;


class MemberRequest extends FormRequest
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
        if($request->method() == 'POST'){
            return [
                'name'                  => 'required|min:3|max:50',
                'email'                 => 'required|email|unique:users',
                'password'              => 'required|confirmed|min:6',
                'password_confirmation' => 'required',
                'role'                  => 'required',
            ];
        }elseif($request->method() == 'PUT'){
            return [
                'name'                  => 'required|min:3|max:50',
                'email'                 => 'required|email|unique:users,email,'.$request->id,
                'password'              => 'nullable|confirmed|min:6',
                'password_confirmation' => 'nullable',
                'role'                  => 'nullable',
            ];
        }

    }

    public function messages()
    {
        return [
                'name.required'                 => 'Member Name field is required.',
                'email.required'                => 'Member E-Mail address field is required.',
                'password.required'             => 'Member Password is required.',
                'password_confirmation.required'=> 'Member Password confirmation is required.',
                'role.required'                 => 'Member Role is required.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(redirect()->back()->withErrors($validator->errors())->withInput());
    }

}
