<a href="{{ url('tarea') }}">CREAR TAREAS</a>
<table>
    <thead>
        <th>#</th>
        <th>Tarea</th>
        <th>Fecha_de_Creacion</th>
        <th>Asignacion</th>

</thead>
<tbody>
@foreach ($tareas as $tarea)

    <tr>
        <td> {{$tarea->id}}</td>
        <td> {{$tarea->tarea}}</td>
        <td>{{$tarea->fecha_de_creacion}}</td>
        <td>{{$tarea->asignacion}}</td> 
     
        <td>
        <a href="{{route('tarea.show', $tarea->id)}}" class="btn btn-success">ver</a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
