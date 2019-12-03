@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Program Studi') }}</div>

                <div class="card-body">
                    <form>
                        @csrf

                        <div class="form-group row">
                            <a class="btn btn-primary" href="{{ route('prodi.create') }}">Add new data</a>
                        </div>

                        <div class="form-group row">
                            <table class="table table-striped table-responsive">
                                <thead class="thead-dark">
                                    <th>ID</th>
                                    <th>Kode</th>
                                    <th>Nama Program Studi</th>
                                    <th>Action</th>
                                </thead>
                                <tbody class="text-justify">
                                    @foreach($prodi as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->kode }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a class="btn btn-sm btn-secondary" href="{{ route('prodi.show', $item->id) }}">View</a>
                                                    <a class="btn btn-sm btn-secondary" href="{{ route('prodi.edit', $item->id) }}">Edit</a>
                                                    {!! Form::open(['route' => ['prodi.destroy', $item->id], 'method' => 'delete']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-secondary']) !!}
                                                    {!! Form::close() !!}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
