
CREAR PEDIDOS
<form action="{{url('/tarea')}}" method="POST">
    @csrf
    @include('tarea.form')
</form>
