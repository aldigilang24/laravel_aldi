@extends('app')

@section('content')
<form action="{{ route('positions.update', $position->id) }}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Name:</strong>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $position->name  }}" placeholder="Name">
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Keterangan :</strong>
        <input type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ $position->keterangan }}" placeholder="Keterangan Position">
        @error('keterangan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Alias:</strong>
        <input type="text" name="alias" class="form-control @error('alias') is-invalid @enderror" value="{{ $position->alias }}" placeholder="Alias Position">
        @error('alias')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
    </div>
    <div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="text-end mb-2">
      <p></p>
    <button type="submit" class="btn btn-primary">Submit</button>
      <a class="btn btn-warning text-end" href="{{ route('positions.index') }}"> Back</a>
    </div>
  </div>
</div>

  </div>
</form>
@endsection