@extends("layout")
@section('content')
    <form action="{{ route('userbarang.order') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        
        @csrf

        <div class="form-group">
            <label class="control-label">ID BARANG</label>
            <input name="id_barang" type="text" class="form-control" value="{{ $data->id }}">
        </div>
        <div class="form-group">
            <label class="control-label">NAMA BARANG</label>
            <input name="nama" type="text" class="form-control" value="{{ $data->nama }}">
        </div>
        <div class="form-group">
            <label class="control-label">BANYAK</label>
            <input name="banyak" type="text" class="form-control" >
        </div>
        
        

        <div class="form-group">
            <button class="btn btn-primary" type="submit">O R D E R</button>
            <a href="{{ route('userbarang.index') }}" class="btn btn-danger">Batal</a>
        </div>
    </form>
@endsection