@extends('layouts.admin')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Beli Jus
					</div>
					<div class="card-body">
						<h3>{{$belijus2->nama}}</h3>
						<hr>
						<p>Rp. {{number_format($belijus2->harga)}} |
						   Seller : {{$belijus2->seller->username}}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection