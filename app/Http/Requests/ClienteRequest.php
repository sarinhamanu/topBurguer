<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ClienteRequest extends FormRequest
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
          'nome'=> 'required|max:80|min:5',
          'telefone' =>'required|max:11|min:11',
          'endereco' => 'required|max:50|min:5|unique:cliente,endereco',
          'email'=>'required|email|unique:cliente,email',
          'password'=> 'required|',
          'imagem' => 'required'
        ];
    }

    public function failedvalidation(Validator $validator){
        throw new HttpResponseException(response()->json([

        ]));
    }
        public function messages()
        {
           return [
            'nome.required'=> 'o campo nome e obrigatório',
            'nome.max' => ' o campo nome deve conter no maximo 80 caracteres',
            'nome.min'=> ' o campo nome deve conter no minimo  5 caracteres',
            'telefone.required'=> ' o campo telefone e obrigatório',
            'telefone.max'=>'o campo telefone deve conter no maximo 11 caracteres',
            'telefone.min'=> ' o campo telefone deve conter no minimo 11 caracteres',
            'endereco.required'=> ' o campo endereco  e obrigatório',
            'endereco.max'=> 'o campo endereco deve conter no maximo 50 caracteres',
            'endereco.min'=> ' o campo endereco deve conter no minimo  5 caracteres',
            'endereco.unique'=> 'endereco ja cadastrado no sistema',
            'email.required'=> 'o campo email e obrigatório',
            'email.email'=> ' formato de email inválido',
            'email.unique'=> 'E_mail já cadastrado no sistema',
            'password.required'=> ' senha obrigatória',
            'imagem.required'=> 'imagem obrigatória'
           ];
        }
   
}
