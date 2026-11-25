<?php
namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreZoneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Fixed: Allow the request to proceed
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'house_id' => $this->input('house_id'),
            'code' => $this->input('code'),
            'name' => $this->input('name'),
            'capacity' => $this->input('capacity'),
            'status' => $this->input('status'),
            'description' => $this->input('description'),
        ]);
    }

    public function rules(): array
    {
        return [
            'house_id' => 'required',
            'code' => 'required|string|max:30',
            'name' => 'required|string|max:255', // Fixed: max:0 to max:255
            'capacity' => 'required|integer|min:0',
            'status' => 'required|in:1,0',       // Fixed: removed space after comma
            'description' => 'nullable|string|max:255',
        ];
    }

    public function attributes(): array
    {
        return [
            'house_id' => 'Kandang',
            'code' => 'Kode',
            'name' => 'Nama',
            'capacity' => 'Kapasitas',
            'description' => 'Deskripsi',
        ];
    }
}
