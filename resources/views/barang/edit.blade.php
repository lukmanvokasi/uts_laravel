@extends("layout")
@section('content')
    <form action="{{ route('barang.update', ['id' => $data-> id]) }}" method="POST" class="form-horizontal">
        
        @csrf

        <div class="form-group">
            <label class="control-label">Nama</label>
            <input name="nama" type="text" class="form-control" value="{{ $data->nama }}">
        </div>
        <div class="form-group">
            <label class="control-label">Harga</label>
            <input name="harga" type="text" class="form-control" value="{{ $data->harga }}">
        </div>
        <div class="form-group">
            <label class="control-label">Stok</label>
            <input name="stok" type="text" class="form-control" value="{{ $data->stok }}">
        </div>
        
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="{{ route('barang.index') }}" class="btn btn-danger">Batal</a>
        </div>
    </form>
@endsection