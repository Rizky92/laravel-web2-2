@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit Mahasiswa') }}</div>

                <div class="card-body">
                    {!! Form::model($mahasiswa, ['route' => ['mahasiswa.update', $mahasiswa->id], 'method' => 'PUT']) !!}
                        @include('mahasiswa.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
