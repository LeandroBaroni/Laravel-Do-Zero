<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome eh obrigatorio.',
            'email.required' => 'O campo email eh obrigatorio',
            'email.email' => 'Por gentileza digite um email em um formato valido',
            'message.required' => 'O campo de mensagem eh obrigatorio ',
        ];
    }
}
