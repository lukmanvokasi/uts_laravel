@extends("layout")

@section("content")
	@if(session('sukses'))
		{{session('sukses')}};
	@endif
	<h1>Daftar Kopi</h1>

     

	<br>
	<br>
	<br>
	<table class="table table-striped table-hover">
		<thead class="thead-dark">
			<th>ID</th>
			<th>NAMA</th>
			<th>HARGA</th>
			<th>STOK</th>
			<th>ACTION</th>
		</thead> 
		<tbody>
			@forelse ($barang as $data)
				<tr>
					<td>{{$data->id}}</td>
					<td>{{$data->nama}}</td>
					<td>{{$data->harga}}</td>
					<td>{{$data->stok}}</td>
					<td>
						<a href="{{  route( 'userbarang.show', ['id' => $data->id] )  }}" class="btn btn-success">Detail</a>
						
						<a href="{{  route( 'userbarang.create', ['id' => $data->id] )  }}" class="btn btn-warning"
							 onclick="return confirm('Yakin mau B E L I ?')">
						B E L I</a>
						
					</td>
				</tr>

			@empty
				<tr>
					<td colspan="4">Data Belum Tersedia / Toko Maintenance</td>
				</tr>

			@endforelse
		</tbody>
	</table>
	<br/>
	Halaman : {{ $barang->currentPage() }} <br/>
	Jumlah Data : {{ $barang->total() }} <br/>
	Data Per Halaman : {{ $barang->perPage() }} <br/>
 
 
	{{ $barang->links() }}

	<div class="form-group">
            <a href="{{ route('admin-login') }}" class="btn btn-danger">Log Out</a>
    </div>
@endsection