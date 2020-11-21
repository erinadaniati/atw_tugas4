<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller{
	function index(){
		$data['list_user'] = User::withCount('belijus2')->get();
		return view('admin/user.index' , $data);
	}
	function create(){
		return view('admin/user.create');
	}
	function store(){
		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->save();

		$userDetail = new UserDetail;
		$userDetail->id_user = $user->id;
		$userDetail->no_hp = request('no_hp');
		$userDetail->save();

		return redirect('admin/user')->with('succes' , 'Data Berhasil Ditambahkan');
	}
	function show(User $user){
		$data['user'] = $user;
		return view ('admin/user.show' , $data);
	}
	function edit(User $user){
		$data['user'] = $user;
		return view ('admin/user.edit' , $data);
	}
	function update(User $user){
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		if(request('password')) $user->password = bcrypt(request('password'));
		$user->save();

		return redirect('admin/user')->with('succes' , 'Data Berhasil Ditambahkan');
	}
	function destroy(User $user){
		$user->delete();

		return redirect('admin/user')->with('succes' , 'Data Berhasil Dihapus');
	}
}