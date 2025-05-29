@include('layouts.cabecera')
@include('layouts.menu')

<h2>Alta de alumnos</h2>
<form action="{{ route('alumnos.store') }}" method='POST'>
    @csrf
    <label for="name">Nombre: </label>
        <input type="text" name="name" required>
    <label for="surname">Apellido: </label>
        <input type="text" name="surname" required>
    <label for="email">Email: </label>
        <input type="email" name="email" required>
    <button type="submit" class="btn btn-success"s>Enviar</button>
</form>

@include('layouts.pie')