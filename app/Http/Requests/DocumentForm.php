<?php

namespace App\Http\Requests;

use App\Models\Template;
use Illuminate\Foundation\Http\FormRequest;

class DocumentForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth('web')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'user_id' => ['required', 'exists:users,id'],
            'template_id' => ['required', 'exists:templates,id']
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'user_id' => auth('web')->id(),
            'template_id' => $this->template_id,
        ]);
    }
}
