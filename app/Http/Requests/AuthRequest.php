<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        if ($this->isMethod('post') && $this->routeIs('auth.register')) {
            // Rules for registration
            return [
                'name' => 'required|string|max:255',
                'numberphone' => 'required|string|max:15|unique:users,numberphone',
                'password' => 'required|string|min:6',
                'cfpassword' => 'required|string|same:password',
            ];
        }

        // Rules for login
        return [
            'numberphone' => 'required|string',
            'password' => 'required|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        if ($this->isMethod('post') && $this->routeIs('auth.register')) {
            // Messages for registration
            return [
                'name.required' => 'Bạn chưa nhập vào họ và tên.',
                'name.string' => 'Họ và tên phải là một chuỗi ký tự.',
                'name.max' => 'Họ và tên không được vượt quá 255 ký tự.',
                'numberphone.required' => 'Bạn chưa nhập vào số điện thoại.',
                'numberphone.string' => 'Số điện thoại phải là một chuỗi ký tự.',
                'numberphone.max' => 'Số điện thoại không được vượt quá 15 ký tự.',
                'numberphone.unique' => 'Số điện thoại này đã được đăng ký.',
                'password.required' => 'Bạn chưa nhập vào mật khẩu.',
                'password.string' => 'Mật khẩu phải là một chuỗi ký tự.',
                'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
                'cfpassword.required' => 'Bạn chưa xác nhận mật khẩu.',
                'cfpassword.string' => 'Xác nhận mật khẩu phải là một chuỗi ký tự.',
                'cfpassword.same' => 'Xác nhận mật khẩu không khớp.',
            ];
        }

        // Messages for login
        return [
            'numberphone.required' => 'Bạn chưa nhập vào số điện thoại.',
            'password.required' => 'Bạn chưa nhập vào mật khẩu.',
        ];
    }
}
