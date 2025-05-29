@include('layouts.cabecera')
@include('layouts.menu')
    <h1 class="mb-4">Listado de alumnos</h1>
    @if ($alumnos->isEmpty())
        <p class="alert alert-warning">No hay alumnos registrados</p>
    @else
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th colspan="2">Operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->name }}</td>
                        <td>{{ $alumno->surname }}</td>
                        <td>{{ $alumno->email }}</td>
                        <td><a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-warning">Editar</a></td>
                        <td>
                            <form action="{{ route('alumnos.destroy', $alumno->id) }}" method='POST'>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro que deseas eliminar este alumno?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@include('layouts.pie')