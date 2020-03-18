@extends("layout")

@section("content")
	@if(session('sukses'))
		{{session('sukses')}};
	@endif
	<h1>Daftar Kopi</h1>
	<br>
	<table class="table table-striped table-hover">
		<thead class="thead-dark">
			<th>ID</th>
			<th>ID_BARANG</th>
			<th>BANYAK</th>
			<th>TGL</th>

			
		</thead> 
		<tbody>
			@forelse ($barang as $data)
				<tr>
					<td>{{$data->id}}</td>
					<td>{{$data->id_barang}}</td>
					<td>{{$data->banyak}}</td>
					<td>{{$data->created_at}}</td>
					
					
				</tr>

			@empty
				<tr>
					<td colspan="4">Data Belum Tersedia</td>
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