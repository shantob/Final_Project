<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $imageValitionRules = 'image|mimes:jpg,png,jpeg,gif';

        if ($this->isMethod('post')) {
            $imageValitionRules = 'required|' . $imageValitionRules;
        }


        return [
            'name' => 'required|string|max:255|min:3|unique:products,id,' . $this->brand?->id,
            'company' => 'required',
            'color_id' => 'required',
            'image' => $imageValitionRules


        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A Name Field is required',
            'name.unique' => 'Database check kore dekheci eta ace',
            'name.string' => 'dasdas',

        ];
    }
}
