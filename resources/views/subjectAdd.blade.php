@extends('layout')

@section('content')
<form method="POST" action="{{ route('subject.submit', $user->idtbl_user)}}">
    @csrf
    <div class="mb-3">
      <label for="nameSubject" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nameSubject" name="nameSubject">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
