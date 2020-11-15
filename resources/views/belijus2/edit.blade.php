@extends('layouts.admin')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Tambah Data Beli Jus
					</div>
					<div class="card-body">
						<form action="{{url('belijus2' , $belijus2->id)}}" method="post"></form>
							@csrf
							@method("PUT")
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$belijus2->nama}}">
						</div>
						<div class='row no-gutters'>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Harga</label>
									<input type="text" class="form-control" name="harga" value="{{$belijus2->harga}}">
								</div>
							</div>
						</div>
					</div>
						<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan </button>
						
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection