<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Estoque_epi_epc_ferramental_produtos;

class UpdateEstoque_epi_epc_ferramental_produtosRequest extends FormRequest
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
        $rules = Estoque_epi_epc_ferramental_produtos::$rules;
        
        return $rules;
    }
}
