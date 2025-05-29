@include('layouts.cabecera')
@include('layouts.menu')

<h2>Editar alumno</h2>
<form action="{{ route('alumnos.update', $alumno->id) }}" method='POST'>
    <!-- Necesario incluir la siguiente linea,genera token de seguridad -->
    @csrf
    <!--Necesario incluir lo siguiente en formularios de edicion -->
    @method('PUT')
    <label for="name">Nombre: </label>
    <input type="text" name="name" value="{{ $alumno->name }}" required>
    <label for="surname">Apellido: </label>
    <input type="text" name="surname" value="{{ $alumno->surname }}" required>
    <label for="email">Email: </label>
    <input type="email" name="email" value="{{ $alumno->email }}" required>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>

@include('layouts.pie')