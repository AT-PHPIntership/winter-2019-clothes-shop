<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'name' => 'required|regex:/^[\pL\s\-]+$/u',
			'email' => 'required|email|unique:users,email,' . $this->user->id,
			'address' => 'required',
			'phone' => 'required|regex:/[0-9]{10}/',
			'username' => 'required|unique:users,username,' . $this->user->id,
			'password' => 'required|min:6|max:20',
			'role' => 'required',
		];
	}
}
