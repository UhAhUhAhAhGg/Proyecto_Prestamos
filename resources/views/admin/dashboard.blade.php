<!-- resources/views/admin/dashboard.blade.php -->
<x-custom-layout>
    <div class="container">
        <h1>Admin Dashboard</h1>
        
        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <button type="submit">
                {{ __('Log Out') }}
            </button>
        </form>

        <h2>Lista de Usuarios</h2>
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-3">Crear Usuario</a>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Fecha de Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->usertype }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.users.show', $user) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-custom-layout>
