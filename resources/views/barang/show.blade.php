@extends("layout")

@section("content")

	<br>
	<ul>
		<li>ID: {{$data->id}}</li>
		<li>NAMA: {{$data->nama}}</li>
		<li>HARGA: {{$data->harga}}</li>
		<li>STOK: {{$data->stok}}</li>
	</ul>

<a href="{{ route('barang.index') }}">Kembali</a>
@endsection