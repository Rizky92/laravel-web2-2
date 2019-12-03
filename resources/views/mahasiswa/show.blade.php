@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Tampil Mahasiswa') }}</div>

                <div class="card-body">
                    @csrf

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Prodi</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $mahasiswa->prodi->kode }} {{ $mahasiswa->prodi->nama }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">NIM</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $mahasiswa->nim }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                        <span class="col-md-6">{!! $mahasiswa->nama !!}</span>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Alamat</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $mahasiswa->alamat }}</label>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="btn-group" role="group">
                            <a class="btn btn-primary" href="{{ route('mahasiswa.edit', $mahasiswa->id) }}">Edit</a>
                            {!! Form::open(['route' => ['mahasiswa.destroy', $mahasiswa->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-secondary']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    @include('layouts.footer')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
