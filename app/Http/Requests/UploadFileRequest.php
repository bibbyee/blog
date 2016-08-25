<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UploadFileRequest extends Request
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
            'file' => 'required|min:1|max:2048',
            'folder' => 'required',
        ];
    }

    public function messages()
    {
        if ($_FILES['file']['error'] = 1)
        {
            return [
                'file.required' => 'The file may not be greater than 2048 kilobytes.',
            ];
        }
    }
}
