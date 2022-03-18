@extends('layout')

@section('content')
<form method="POST" action="{{ route('user.submit')}}">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Edad</label>
        <input type="number" class="form-control" id="age" name="age">
    </div>
    <select class="form-select" aria-label="Default select example" name="gender">
        <option selected>Genero</option>
        <option value="Male">Hombre</option>
        <option value="Female">Mujer</option>
    </select>
    <div class="mb-3">
        <label for="subject" class="form-label">Materia</label>
        <input type="text" class="form-control" id="subject" name="subject">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
