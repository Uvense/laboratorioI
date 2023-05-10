Registro de trarea 
Tarea:
<input type="text" name="tarea" id="tarea" value="{{isset($tarea)? $tarea->tarea:'' }}"><br/>
Fecha de la creacion:
<input type="text" name="fecha_de_creacion" id="fecha_de_creacion" value="{{isset($tarea)? $tarea->fecha_de_creacion:'' }}"></br>
Asignacion:
<input type="text" name="asignacion" id="asignacion" value="{{isset($tarea)? $tarea->asignacion:'' }}"><br/>
<button type="submit">Guardar</button>