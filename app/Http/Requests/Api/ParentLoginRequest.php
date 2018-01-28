<?php

namespace App\Http\Requests\Api;

use App\Helper\RestApi;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ParentLoginRequest extends FormRequest
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

    protected function failedValidation(Validator $validator)
    {
     #   throw new HttpResponseException(response()->json($validator->errors()->first(), 422));
      return RestApi::response([],404,$validator->errors()->first());
    }



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'string|required|exists:parent,email',
            'password' => 'required|string'
        ];
    }
}
