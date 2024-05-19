<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <!-- EDITAS EL TITULO DE LOGIN DEL USUARIO -->
                <h1>(EDITAR) TITULO LOGIN DE USUARIO</h1>

                <!-- LA LINEA EDITADA ES LA ORIGINAL -->
                <!-- <x-label for="email" value="{{ __('Email') }}" /> -->
                <x-label for="email" value="(EDITAR) Correo Electronico" />

                <!-- Lo de abajo es la cajita -->
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <!-- AQUI PUEDES EDITAR ELPASSWORD -->
            <div class="mt-4">

                <!-- LA LINEA COMENTADA ERA EL COISTO de CONTRASEÑA -->
                <!-- <x-label for="password" value="{{ __('Password') }}" -->
                <x-label for="password" value="Contraseña (Editar)" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    
                    <!-- AQUI VA EL RECUERDME: ORIGINAL Linea Comentada -->
                    <!-- <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span> -->
                    <span class="ms-2 text-sm text-gray-600">(EDITAR)Recuerdame</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    <!-- Parte Comentada es la original -->
                        <!-- {{ __('Forgot your password?') }} -->
                        {{ __('(EDITAR) (Olvidaste tu contraseña)? ') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
