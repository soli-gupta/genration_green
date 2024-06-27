<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerCreateValdation extends FormRequest
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
              'name' => 'required|max:100',
              'email' => 'required|email|max:150',              
              'mobile' => 'required|numeric|digits_between:8,12',
              'organization' => 'required|max:150',
              'designation' => 'required|max:150',   
              'message' => 'required|max:500',
        ]; 
    }
    public function messages()
    {
      return  [    
    'name.required' => 'Name is required.',
    'name.max' => 'Name must be less or equal to 100 characters.',
    'email.required' => 'Email address is required.',
    'email.email' => 'Enter valid email address.',
    'email.max' => 'Email address must be less or equal to 150 characters.',    
    'mobile.required' => 'Phone number is required.',
    'mobile.numeric' => 'Please enter valid 10 digit phone number.',
    'mobile.digits_between' => 'Please enter valid between 8 to 12 digit phone number.',
    'organization.required' => 'Organization is required.',
    'organization.max' => 'Organization must be less or equal to 150 characters.',
    'designation.required' => 'Designation is required.',
    'designation.max' => 'Designation must be less or equal to 150 characters.', 
    'message.required' => 'Message is required.',
    'message.max' => 'Message must be less or equal to 500 characters.',
            ];    
    
    }//end messages
}//end ContactUsValdation
