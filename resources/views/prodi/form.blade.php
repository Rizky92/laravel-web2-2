@csrf
<div class="form-group row">
    {!! Form::label('kode', __('Kode Program Studi'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::text('kode', null, ['class' => 'form-control col-md-7', 'name' => 'kode', 'required', 'autofocus', 'value' => old('kode'), 'placeholder' => 'Kode Program Studi...']) !!}
</div>

<div class="form-group row">
    {!! Form::label('nama', __('Nama Program Studi'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::text('nama', null, ['class' => 'form-control col-md-7', 'name' => 'nama', 'required', 'value' => old('nama'), 'placeholder' => 'Nama Lengkap Program Studi...']) !!}
</div>

{{-- {!! Form::hidden('users_id', Auth::id(), ['name' => 'users_id']) !!} --}}

<div class="form-group row">
    <div class="btn-group">
        {!! Form::submit(__('Done'), ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('prodi.index') !!}" class="btn btn-danger">
            Cancel
        </a>
    </div>
</div>

