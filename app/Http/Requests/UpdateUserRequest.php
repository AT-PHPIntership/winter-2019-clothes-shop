<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function rules() {
		return [
			'name' => 'required|regex:/^[\pL\s\-]+$/u',
			'email' => 'required|email',
			'address' => 'required',
			'phone' => 'required|regex:/[0-9]{10}/',
			'username' => 'required',
			'password' => 'required|min:6|max:20',
			'role' => 'required',
		];
	}
	public function messages() {
		return [
			'name.required' => 'Bạn cần nhập tên!',
			'name.regex' => 'Bạn cần nhập chữ!',
			'email.required' => 'Bạn cần nhập Email!',
			'email.email' => 'Sai định dạng Email',
			'address.required' => 'Bạn cần nhập địa chỉ!',
			'phone.required' => 'Bạn cần nhập số điện thoại!',
			'phone.regex' => 'Số điện thoại phải có 10 chữ số!',
			'username.required' => 'Bạn cần nhập tài khoản!',
			'password.required' => 'Bạn cần nhập password',
			'password.min' => 'Mật khẩu ít nhất là 6 ký tự!',
			'password.max' => 'Mật khẩu tối đa là 20 ký tự!',
			'role.required' => 'Bạn cần nhập quyền!',
		];
	}
}
