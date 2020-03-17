<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest {
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
			'name' => 'required|unique:products,name',
			'category_id' => 'required',
			'size' => 'required',
			'color' => 'required',
			'quantity' => 'required|numeric',
			'price' => 'required|numeric',
			'promotion_price' => 'required|numeric',
			'description' => 'required',
			'is_active' => 'required|numeric',
		];
	}
	public function messages() {
		return [
			'name.required' => 'Bạn phải nhập tên!',
			'name.unique' => 'Tên sản phẩm đã tồn tại!',
			'category_id.required' => 'Bạn phải nhập thể loại!',
			'size.required' => 'Bạn phải nhập kích thước!',
			'color.required' => 'Bạn phải nhập màu sắc!',
			'quantity.required' => 'Bạn phải nhập số lượng!',
			'quantity.numeric' => 'Bạn phải nhập số!',
			'price.required' => 'Bạn phải nhập giá!',
			'price.numeric' => 'Bạn phải nhập số!',
			'promotion_price.required' => 'Bạn phải nhập giá khuyến mãi!',
			'promotion_price.numeric' => 'Bạn phải nhập số!',
			'description.required' => 'Bạn phải nhập mô tả!',
			'is_active.required' => 'Bạn phải nhập is_active!',
			'is_active.numeric' => 'Bạn phải nhập số!',
		];
	}
}
