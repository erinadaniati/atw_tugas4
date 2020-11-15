<?php

namespace App\Http\Controllers;
use App\Models\Belijus;

class BelijusController extends Controller{
	function index(){
		$data['list_belijus2'] = Belijus::all();
		return view('belijus2.index' , $data);
	}
	function create(){
		return view('belijus2.create');
	}
	function store(){
		$belijus2 = new Belijus;
		$belijus2->nama = request('nama');
		$belijus2->harga = request('harga');
		$belijus2->save();

		return redirect('belijus2')->with('succes' , 'Data Berhasil Ditambahkan');
	}
	function show(Belijus $belijus2){
		$data['belijus2'] = $belijus2;
		return view ('belijus2.show' , $data);
	}
	function edit(Belijus $belijus2){
		$data['belijus2'] = $belijus2;
		return view ('belijus2.edit' , $data);
	}
	function update(Belijus $belijus2){
		$belijus2->nama = request('nama');
		$belijus2->harga = request('harga');
		$belijus2->save();

		return redirect('belijus2')->with('succes' , 'Data Berhasil Diedit');
	}
	function destroy(Belijus $belijus2){
		$belijus2->delete();

		return redirect('belijus2')->with('succes' , 'Data Berhasil Dihapus');
	}
}