<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class UserController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$user = User::all();
		return view('admin.user.index', compact('user'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.user.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(CreateUserRequest $request) {
		$data = $request->all();
		$password = bcrypt('password');
		Arr::set($data, 'password', $password);
		User::create($data);
		return redirect()->route('users.index')->with('success', 'Success!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(User $user) {
		return view('admin.user.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(User $user) {
		return view('admin.user.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(CreateUserRequest $request, User $user) {
		if ($request->password != '') {
			$password = bcrypt($request->input('password'));
			$data = $request->all();
			Arr::set($data, 'password', $password);
			$user->update($data);
			return redirect()->route('users.index')->with('success', 'Success!');
		} else {
			$user->update($request->except('password'));
			return redirect()->route('users.index')->with('success', 'Success!');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(User $user) {
		$user->delete();
		return redirect()->route('users.index')->with('success', 'Success!');
	}
}
