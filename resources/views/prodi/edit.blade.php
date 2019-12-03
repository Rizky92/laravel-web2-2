@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit an Article') }}</div>

                <div class="card-body">
                    {!! Form::model($prodi, ['route' => ['prodi.update', $prodi->id], 'method' => 'PUT']) !!}
                        @include('prodi.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
