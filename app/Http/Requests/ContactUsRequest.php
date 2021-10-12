<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
        $rules = [
                'name' => ['required','string', 'min:3', 'max:256'],
                'email' => 'required|email',
                    // 'department' => ['nullable', 'string', 
                    // Rule::in(['administration', 'accounting', 
                    // 'technicalDepartment', 'logistic']),
                    // ],
                'message' => ['required', 'string', 'min:10', 'max:1000'],
                'readTerms' => 'required|boolean',                    
                ];
                
            if($this->input('department') === null) {
                $rules['message'][0] = 'nullable';
            }  
            return $rules;
    }
}



