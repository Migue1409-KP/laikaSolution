@extends('layout')

@section('content')
<form method="POST" action="{{ route('subject.update', $subject[0]->idtbl_subject)}}">
    @csrf
    <div class="mb-3">
      <label for="nameSubject" class="form-label">Materia</label>
      <input type="text" class="form-control" id="nameSubject" name="nameSubject" value = {{$subject[0]->nameSubject}}>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
