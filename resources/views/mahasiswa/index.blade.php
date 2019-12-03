@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Mahasiswa') }}</div>

                <div class="card-body">
                    <form>
                        @csrf

                        <div class="form-group row">
                            <a class="btn btn-primary" href="{{ route('mahasiswa.create') }}">Add new data</a>
                        </div>

                        <div class="form-group row">
                            <table class="table table-striped table-responsive">
                                <thead class="thead-dark">
                                    <th>NIM</th>
                                    <th width="120px">Nama Lengkap</th>
                                    <th width="40%">Prodi</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </thead>
                                <tbody class="text-justify">
                                    @foreach($mahasiswa as $item)
                                        <tr>
                                            <td>{{ $item->nim }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->id_prodi }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a class="btn btn-sm btn-secondary" href="{{ route('mahasiswa.show', $item->id) }}">View</a>
                                                    <a class="btn btn-sm btn-secondary" href="{{ route('mahasiswa.edit', $item->id) }}">Edit</a>
                                                    {!! Form::open(['route' => ['mahasiswa.destroy', $item->id], 'method' => 'delete']) !!}
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
