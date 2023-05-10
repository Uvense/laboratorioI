Registro de trarea 

<label class="form-label">Tarea:</label>
<input type="text" name="tarea" id="tarea" value="{{ isset($tarea)?$tarea->tarea:'' }}"><br/>
@error('tarea')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
<label class="form-label">Fecha de la creacion:</label>
<input type="text" name="fecha_de_creacion" id="fecha_de_creacion" value="{{isset($tarea)? $tarea->fecha_de_creacion:'' }}"></br>
@error('fecha_de_creacion')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
<label class="form-label">Asignacion:</label>
<input type="text" name="asignacion" id="asignacion" value="{{isset($tarea)? $tarea->asignacion:'' }}"><br/>
@error('asignacion')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
<button type="submit">Guardar</button>