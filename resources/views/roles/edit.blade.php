@extends('layouts.default')

@section('contenu')
<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Update Role</h3>
      <form action="{{ route('roles.update', $role->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="label">Label</label>
          <input type="text" class="form-control" id="label" name="label" required value="{{ $role->label }}"/>
        </div>
        <button type="submit" class="btn mt-3 btn-primary">Update Role</button>
      </form>
    </div>
  </div>
</div>
@stop

@section('contenu-footer')
    <p>Footer de la page roles.blade.php</p>
@stop
