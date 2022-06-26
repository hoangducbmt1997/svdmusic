<?php

namespace App\Http\Requests\Theme;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name_theme' => 'required|unique:theme,name_theme,',
            'upload_image' => 'required',
            'prioty' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name_theme.required' => 'Tên chủ đề âm nhạc không được để trống',
            'upload_image.required' => 'Ảnh chủ đề âm nhạc không được để trống',
            'prioty.required' => 'Prioty không được để trống',
            'name_theme.unique' => 'Danh mục đã có trong CSDL',
        ];
    }
}
