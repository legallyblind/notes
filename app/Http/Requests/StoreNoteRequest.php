<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNoteRequest extends FormRequest
{
    /**
     * All end users are allowed to make request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Validation rules
     * @return string[]
     */
    public function rules()
    {
        return [
          'title'   => 'required|regex:/^[a-zA-Z0-9_-]*$/|max:32',
          'content' => 'required|regex:/[a-zA-Z0-9\s]+/|max:2048'
        ];
    }
}
