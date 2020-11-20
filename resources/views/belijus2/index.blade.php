@extends('layouts.admin')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Filter
						<div class="card-body">
							<form action="{{url('admin/belijus2/filter')}}" method="post">
								@csrf
								<div class="form-group">
									<label for="" class="control-label"> Nama </label>
									<input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
								</div>
								<div class="form-group">
									<label for="" class="control-label"> Stok </label>
									<input type="text" class="form-control" name="stok" value="{{$stok ?? ""}}">
								</div>
								<div class="form-group">
									<label for="" class="control-label"> Harga Min </label>
									<input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
								</div>
								<div class="form-group">
									<label for="" class="control-label"> Harga Max </label>
									<input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
								</div>

								<button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter </button>
							</form>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header">
						Data Beli Jus
						<a href="{{url('belijus2/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data </a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>Nama</th>
								<th>Harga</th>
							</thead>
							<tbody>
								@foreach($list_belijus2 as $belijus2)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
										<a href="{{url('belijus2', $belijus2->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
										<a href="{{url('belijus2', $belijus2->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										<form action="{{url('belijus2', $belijus2->id)}}" method="post" class="form-inline" onsubmit="return confirm('Yakin Akan Menghapus Data Ini?')">
											@csrf
											@method("DELETE")
											<button class="btn btn-danger"><i class="fa fa-trash"></i>
												
											</button>
										</form>
										</div>
									</td>
									<td>{{$belijus2->nama}}</td>
									<td>{{$belijus2->harga}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>

@endsection