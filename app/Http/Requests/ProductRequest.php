<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'name' => 'required|string|max:255|min:3|unique:products,id,' . $this->product?->id,
            'description' => 'required',
            'price' => 'required|digits_between:1,6',

            // 'seats' => ' required|integer|size:10';

            //'image[]' => $imageValitionRules


        ];
        //

    }


    public function messages()
    {
        return [
            'name.required' => 'A Name Field is required',
            'name.unique' => 'Database check kore dekheci eta ace',
            'name.string' => 'dasdas',
            'category.required' => "category_id Field is Required",
            'price.required.' => "price requried",
            'description.required.' => "description requried"
        ];
    }
}
