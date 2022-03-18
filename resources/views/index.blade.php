@extends('layout')

@section('content')

<div class="container">
  <form action="{{ route('user.create') }}" method="GET">
    <button type="submit" class="btn btn-dark" href=>Agregar Usuario</button>
  </form>
  <table class="table table-striped">
	<thead>
	  <tr>
		  <th scope="col">Nombre</th>
		  <th scope="col">Apellido</th>
		  <th scope="col">Genero</th>
		  <th scope="col">Edad</th>
		  <th scope="col">Materias</th>
		  <th scope="col">Acciones</th>
	  </tr>
	</thead>
	<tbody>
	  @foreach ($users as $user)
		  <tr scope="row">
			  <td>{{ $user->name }}</td>
			  <td>{{ $user->lastname }}</td>
			  <td>{{ $user->gender }}</td>
			  <td>{{ $user->age }}</td>
			  <td>
          {{$user->nameSubject}}
        </td>
			  <td>
				  <a href= {{ route('user.edit', $user->idtbl_user) }}>Editar</a>
				  <form method="POST" action= {{ route('user.destroy', $user->idtbl_user) }}>
                  <a href= {{ route('subject.edit', $user->idtbl_user) }}>Editar Materia</a>
                    @csrf
					<button type="submit">Eliminar</button>
				  </form>
			  </td>
		  </tr>
	  @endforeach
	</tbody>
	<tfoot>
	  <tr>
		  <th scope="col">Nombre</th>
		  <th scope="col">Apellido</th>
		  <th scope="col">Genero</th>
		  <th scope="col">Edad</th>
		  <th scope="col">Materias</th>
		  <th scope="col">Acciones</th>
	  </tr>
	</tfoot>
  </table>
</div>

@endsection
