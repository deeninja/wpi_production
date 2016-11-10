<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
        $this->sanitize();

        return [
            'first_name'=>'required|alpha',
            'last_name'=>'required|alpha',
            'photo_id'=>'image',
            'role_id'=>'required',
            'password'=>'min:6',
            'status'=>'required',
        ];
    }

    public function sanitize()
    {
        $inputs = $this->all();

        // trim inputs
        trim($inputs['first_name']);
        trim($inputs['last_name']);
        trim($inputs['email']);
        trim($inputs['password']);

        // sanitize inputs
        $inputs['first_name'] = filter_var($inputs['first_name'], FILTER_SANITIZE_STRING);
        $inputs['last_name'] = filter_var($inputs['last_name'], FILTER_SANITIZE_STRING);
        $inputs['email'] = filter_var($inputs['email'], FILTER_SANITIZE_EMAIL);
        $inputs['password'] = filter_var($inputs['password'], FILTER_SANITIZE_STRING);

        // replaces the array of input values with sanitized values.
        $this->replace($inputs);


    }
}
