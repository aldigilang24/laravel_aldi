@extends('app')
@section('content')
@if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

<div class="text-end mb-2">
                    <a class="btn btn-primary" href="{{ route('departements.create') }}">Add Department</a>
                </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Manager ID</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  @php $no = 1; @endphp
  @foreach ($departements as $val)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $val->name }}</td>
                        <td>{{ $val->location }}</td>
                        <td>{{ $val->manager_id }}</td>
                        <td>
                            <form action="{{ route('departements.destroy',$val->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('departements.edit',$val->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

  </tbody>
</table>
@endsection