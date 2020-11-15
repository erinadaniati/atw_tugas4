@extends('layouts.admin')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
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