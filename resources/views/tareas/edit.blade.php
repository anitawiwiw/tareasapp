<h1>Editar Tarea</h1>
<form action="/tareas/{{ $tarea->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="titulo" value="{{ $tarea->titulo }}" placeholder="Editar tarea">
    <label>
        Completada:
        <input type="checkbox" name="completada" {{ $tarea->completada ? 'checked' : '' }}>
    </label>
    <button type="submit">Actualizar</button>
</form>

<a href="/">Volver a la lista de tareas</a>
