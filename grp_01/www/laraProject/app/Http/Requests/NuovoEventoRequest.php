<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NuovoEventoRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'titolo' => 'required|max:40',
            'locandina' => 'image|max:1024',
            'societa_organizzatrice' => 'required|max:40',
            'prezzo_biglietto' => 'required|numeric|min:0',
            'totale_biglietti_evento' => 'required|numeric|min:0',
            'biglietti_rimanenti' => 'required|numeric|min:0',
            'coordinate_maps' => 'required|max:2500',
            'luogo' => 'required|max:100',
            'data_ora' => 'required',
            'indicazioni' => 'required|max:2500',
            'informazioni' => 'required|max:2500'
        ];
    }

}