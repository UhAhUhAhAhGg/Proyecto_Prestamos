<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>
        <!--Adicion de los styles de la pagina!-->
        <link rel="stylesheet" href="../../resources/css/styles_forgotpassword.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

        <div class="mb-4 text-sm text-gray-600">
            <!-- Aqui se cambia la contraseña -->
            <!-- SECCION COMENTADA ES LA ORIGINAL -->
            <!-- {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }} -->
            {{ __('(EDITAR) No puedes recordar tu contraseña? No te preocupes. Tan solo deja tu direccion de email y te contactaremos mediante un link donde puedas cambiar tu contraseña.') }}
        </div>
        <!-- Aqui creo que esta la vista para -->

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <!-- Aqui cambias el valor del email y otras cosas -->
                <!-- ORIGINAL ES el COMENTADO -->
                <!-- <x-label for="email" value="{{ __('Email') }}" /> -->
                <x-label for="email" value="(EDITAR) Introduce tu Correo Electronico" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <!-- Arriba es la cajita para poner el email -->
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    <!-- Este es el boton para resetear el link -->
                    <!-- LA LINEA COMENTADA DE ABAJO ES LAL ORIGINAL -->
                    <!-- {{ __('Email Password Reset Link') }} -->
                    {{ __('(EDITAR) RESETEA TU CONTRASEÑA') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
