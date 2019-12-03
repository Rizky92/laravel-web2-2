@csrf
<div class="form-group row">
    {!! Form::label('nim', __('NIM'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::text('nim', null, ['class' => 'form-control col-md-7', 'name' => 'nim', 'required', 'autofocus', 'value' => old('nim'), 'placeholder' => 'NIM']) !!}
</div>

<div class="form-group row">
    {!! Form::label('nama', __('Nama Mahasiswa'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::text('nama', null, ['class' => 'form-control col-md-7', 'name' => 'nama', 'value' => old('nama'), 'placeholder' => 'Nama Lengkap']) !!}
</div>

<div class="form-group row">
    {!! Form::label('alamat', __('Alamat Lengkap'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control col-md-7', 'name' => 'alamat', 'value' => old('alamat')]) !!}
</div>

<div class="form-group row">
    {!! Form::label('id_prodi', __('Prodi'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::select('id_prodi', $prodi, $selected, ['class' => 'form-control col-md-7', 'name' => 'id_prodi', 'value' => old('id_prodi')]) !!}
</div>

{{-- {!! Form::hidden('users_id', Auth::id(), ['name' => 'users_id']) !!} --}}

<div class="form-group row">
    <div class="btn-group">
        {!! Form::submit(__('Selesai'), ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('mahasiswa.index') !!}" class="btn btn-danger">
            Cancel
        </a>
    </div>
</div>

