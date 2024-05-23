<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body>
    ADMIN

    <form method="POST" action="{{ route('logout') }}" x-data>
        @csrf
        <button type="submit">
            {{ __('Log Out') }}
        </button>
    </form>
</body>
</html>
