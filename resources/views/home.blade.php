@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Promo Tekan Tombol Di Samping Kanan
                    <a href="{{ route('userbarang.index') }}" class="btn btn-danger">BELI KOPI</a>
                </div>

                <div class="form-group">
                    
                 </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>  
                    @endif
                        Keluar, tekan tombol Logout di pojok samping kanan atas,</br>
                        di bawah tombol segitiga
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
