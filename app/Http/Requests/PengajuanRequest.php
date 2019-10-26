<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengajuanRequest extends FormRequest
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
            'categorie_id'      => 'required',
            'name'              => 'required',
            'phone'             => 'required',
            'problem'           => 'required',
            'unit'              => 'required',
            'type'              => 'required',
            'request_date'      => 'required',
            'time'              => 'required',
            'status'            => 'required',
            'address'           => 'required',
            'email'             => 'required',
            'nominal'           => 'required',
        ];
    }
    public function formPengajuan()
    {
        return [
            'categorie_id'      => $this->categorie_id,
            'name'              => $this->name,
            'phone'             => $this->phone,
            'problem'           => $this->problem,
            'unit'              => $this->unit,
            'type'              => $this->type,
            'request_date'      => $this->request_date,
            'time'              => $this->time,
            'status'            => $this->status,
            'address'           => $this->address,
            'email'             => $this->email,
            'nominal'           => $this->nominal,
        ];
    }
}
