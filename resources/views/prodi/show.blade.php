@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Tampil Program Studi') }}</div>

                <div class="card-body">
                    @csrf

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">ID</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $prodi->id }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Kode Program Studi</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $prodi->kode }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Nama Lengkap Program Studi</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $prodi->nama }}</label>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="btn-group" role="group">
                            <a class="btn btn-primary" href="{{ route('prodi.edit', $prodi->id) }}">Edit</a>
                            {!! Form::open(['route' => ['prodi.destroy', $prodi->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-secondary']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
