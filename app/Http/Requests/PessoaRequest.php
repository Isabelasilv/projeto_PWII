<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'sobrenome' => 'required|min:3',
            'telefone' => 'required'
            
        ];
    }

    public function message ()
    {
        
    }
}

