
<h2>CREAR TAREA</h2> 

<form action="{{url('/tarea')}}" method="POST">
    @csrf
    @include('tarea.form')
</form>
<a href="{{ url('tarea/create') }}">Registros de Tareas</a>
