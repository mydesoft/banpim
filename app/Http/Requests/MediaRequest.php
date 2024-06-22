<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class MediaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],  
            'image' => ['required',  File::types(['png', 'jpg', 'jpeg', 'svg'])],
            'description' => ['required'],  
            'category_id' => ['required'],  
          ];
      }
  
      public function messages()
      {
          return [
              'category_id.required' => 'Category field required',
          ];
      }
}
