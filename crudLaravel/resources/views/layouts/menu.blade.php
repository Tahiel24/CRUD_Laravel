<header>
    <nav>
        <ul>
        <!-- La siguiente es la forma de utilizar los href en Laravel -->
            <li><a href="{{ route('alumnos.index') }}">Listado de alumnos</a></li>
            <li><a href="{{ route('alumnos.create') }}">Alta de alumnos</a></li>
        </ul>
    </nav>
</header>