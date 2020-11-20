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

	function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		//$data['list_belijus2'] = Belijus::where('nama','like',"%$nama%")->get();
		//$data['list_belijus2'] = Belijus::whereIn('stok', $stok)->get();
		//$data['list_belijus2'] = Belijus::whereBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_belijus2'] = Belijus::whereIn('stok', '<>', $stok)->get();
		//$data['list_belijus2'] = Belijus::whereNotIn('stok', $stok)->get();
		//$data['list_belijus2'] = Belijus::whereNotBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_belijus2'] = Belijus::whereNull('stok')->get();
		//$data['list_belijus2'] = Belijus::whereNotNull('stok')->get();
		//$data['list_belijus2'] = Belijus::whereDate('created_at', '2020-01-17')->get();
		//$data['list_belijus2'] = Belijus::whereYear('created_at', '2020')->get();
		//$data['list_belijus2'] = Belijus::whereMonth('created_at', '01')->get();
		//$data['list_belijus2'] = Belijus::whereTime('created_at', '15:24:50')->get();
		$data['nama'] = $nama;
		$data['stok'] = request('stok');
		return view('belijus2.index' , $data);
	}
}