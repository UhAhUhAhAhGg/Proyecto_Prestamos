<!-- resources/views/admin/users/create.blade.php -->
<x-custom-layout>
    <div class="container">
        <h1>Crear Usuario</h1>
        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="usertype">Rol</label>
                <input type="text" class="form-control" id="usertype" name="usertype" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</x-custom-layout>
