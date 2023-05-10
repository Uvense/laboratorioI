<a href="{{ url('tarea/create') }}">Registros de Tareas</a>
<div>
    <h3>Detalles de la tarea {{$tarea->id}}</h3>
    <p>Tarea: {{ $tarea->tarea}}</p>
    <p>Fecha de Creacion: {{ $tarea->fecha_de_creacion}}</p>
    <p>Asiganacion: {{ $tarea->asignacion}}</p>
</div>
