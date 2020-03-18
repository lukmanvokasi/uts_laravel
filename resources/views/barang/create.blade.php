@extends("layout")
@section('content')
    <form action="{{ route('barang.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        
        @csrf

        <div class="form-group">
            <label class="control-label">Nama</label>
            <input name="nama" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label">Harga</label>
            <input name="harga" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label">Stok</label>
            <input name="stok" type="text" class="form-control">
        </div>
        

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="{{ route('barang.index') }}" class="btn btn-danger">Batal</a>
        </div>
    </form>
@endsection