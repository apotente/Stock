<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Id</th>
        <th>Descripcion</th>
    </tr>
    @foreach ($modulos as $mod)
        <tr>
            <td>{{ $mod->id }}</td>
            <td>{{ $mod->descripcion }}</td>
            <td>
                <a href="{{ route('admin.modulos.edit', $mod) }}">Editar</a>
                <a href="">Eliminar</a>
            </td>
        </tr>
    @endforeach
</table>