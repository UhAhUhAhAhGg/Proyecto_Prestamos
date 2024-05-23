<!-- resources/views/admin/users/edit.blade.php -->
<x-custom-layout>
    <div class="container">
        <h1>Editar Usuario</h1>
        <form action="{{ route('admin.users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="form-group">
                <label for="usertype">Rol</label>
                <input type="text" class="form-control" id="usertype" name="usertype" value="{{ $user->usertype }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</x-custom-layout>
