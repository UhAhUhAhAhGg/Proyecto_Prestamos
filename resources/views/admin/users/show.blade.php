<!-- resources/views/admin/users/show.blade.php -->
<x-custom-layout>
    <div class="container">
        <h1>Detalle del Usuario</h1>
        <table class="table">
            <tr>
                <th>Nombre</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Rol</th>
                <td>{{ $user->usertype }}</td>
            </tr>
            <tr>
                <th>Fecha de Creación</th>
                <td>{{ $user->created_at }}</td>
            </tr>
        </table>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Volver</a>
        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('admin.users.destroy', $user) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
</x-custom-layout>
