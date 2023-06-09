@extends('app')
@section('content')
  <form action="{{ route('departements.update', $departement->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Name:</strong>
                  <input type="text" name="name" class="form-control" value="{{ $departement->name }}" placeholder="Nama Lengkap">
                  @error('name')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Location:</strong>
                  <input type="text" name="location" class="form-control" value="{{ $departement->location }}" placeholder="Keterangan Posisi">
                  @error('location')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Manager ID:</strong>
                  <select name="manager_id" class="form-control">
                  <?php $i = 1; ?>
                    <option value="{{ $i++ }}">User</option>
                  </select>
                  @error('manager_id')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
              </div>
          </div>
          <div class="col-lg-12 margin-tb">
    <div class="text-end mb-2">
      <p></p>
    <button type="submit" class="btn btn-primary">Submit</button>
      <a class="btn btn-warning text-end" href="{{ route('departements.index') }}"> Back</a>
    </div>
  </div>
</div>
      </div>
  </form>
@endsection