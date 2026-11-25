<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use League\CommonMark\Extension\DescriptionList\Node\Description;
use Illuminate\Validation\Rule;

class StoreKandangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'code' => $this->input('code'),
            'name' => $this->input('name'),
            'coop_type' => $this->input('coop_type'),
            'location' => $this->input('location'),
            'dimensions'=> $this->input('panjang_m') . ' x ' . $this->input('lebar_m') .'m',
            'total_area' => $this->input('panjang_m') * $this->input('lebar_m').' m²',
            'description' => $this->input('description'),
        ]);
    }

    public function rules(): array
    {
        return [
            'code' => [
            'required', 'string', 'max:10',
            Rule::unique('houses', 'code')->ignore($this->route('house')),
        ],
            'name' => 'required|string|max:60',
            'coop_type' => 'required|in:1,2,3',
            'location' => 'required|string|max:255',
        ];
    }

     // Supaya pesan error menyebut "Panjang", bukan "panjang m"
    public function attributes(): array
    {
        return ['panjang_m' => 'Panjang', 'lebar_m' => 'Lebar',
         'code' => 'Kode', 'name' => 'Nama', 'location' => 'Lokasi', 'coop_type' => 'Jenis Kandang'];
    }
}
