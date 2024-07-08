<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Rules\MinimumAge;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
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
            'first_name' => ['max:20'],
            'last_name' => ['max:20'],
            'birthday' => ['date', new MinimumAge],
            'username' => ['string', 'max:255', 'regex:/^[a-zA-Z]+$/u',Rule::unique('users')->ignore($this->user)],
            'phone' => ['digits:11', 'regex:/(0|\+84)?([ ]|-|[()]){0,2}9[1|2|3|4]([ ]|-|[()]){0,2}(?:[0-9]([ ]|-|[()]){0,2}){8}/', Rule::unique('users')->ignore($this->user)],
            'gender' => ['nullable','in:female,male'],
            'country_id' => ['nullable','exists:countries,id'],
            'city_id' => ['nullable','exists:cities,id'],
            'avatar' => ['mimes:jpeg,png,jpg,gif,svg', 'max:200'],
            'email' => ['string', 'email', 'max:255', Rule::unique('users')->ignore($this->user)],
        ];
    }
}
