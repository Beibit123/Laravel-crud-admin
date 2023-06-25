<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComputerRequest extends FormRequest{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'name' => 'required|string',
            'price' => 'required',
            'image' => 'required'
        ];
    }
}
