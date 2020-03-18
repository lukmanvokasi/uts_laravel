@extends("layout")

@section("content")
	@if(session('sukses'))
		{{session('sukses')}};
	@endif
	<h1>Daftar Kopi</h1>
	<a href="{{  route( 'barang.lapor' )  }}" class="btn btn-success">Laporan</a>
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
						<a href="{{  route( 'barang.show', ['id' => $data->id] )  }}" class="btn btn-success">Detail</a>
						<a href="{{  route( 'barang.edit', ['id' => $data->id] )  }}" class="btn btn-warning">
						Edit</a>
						<a href="{{  route( 'barang.destroy', ['id' => $data->id] )  }}" class="btn btn-danger"
							 onclick="return confirm('Yakin mau dihapus ?')">
						Delete</a>
						
					</td>
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