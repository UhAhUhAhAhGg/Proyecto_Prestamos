<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    body {
      height: 100vh;
      margin: 0;
      background-color: #e6c972;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      background: #ffffff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 500px;
      width: 100%;
    }

    .login-container .header1 {
      text-align: center;
      color: #333333;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .login-container .form-group {
      margin-bottom: 15px;
    }

    .login-container .form-group label {
      font-weight: bold;
      color: #333333;
    }

    .login-container .form-control {
      border-radius: 50px;
      padding: 10px 15px;
    }

    .login-container .btn-primary {
      background-color: #2C76CE;
      border: none;
      border-radius: 50px;
      padding: 10px 20px;
      font-weight: bold;
      transition: background-color 0.3s, transform 0.2s;
    }

    .login-container .btn-primary:hover {
      background-color: #0056b3;
      transform: translateY(-2px);
    }

    .login-container .forgot-password {
      display: block;
      margin-top: 10px;
      color: #007bff;
      text-decoration: none;
      transition: color 0.3s;
    }

    .login-container .forgot-password:hover {
      color: #0056b3;
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h2 class="header1">Registro de usuario</h2>

    <x-guest-layout>
      <x-authentication-card>
        <x-slot name="logo">
          <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
          @csrf

          <div class="form-group">
            <x-label for="name" value="{{ __('Nombre') }}" />
            <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus
              autocomplete="name" />
          </div>

          <div class="form-group mt-4">
            <x-label for="email" value="{{ __('Correo') }}" />
            <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required
              autocomplete="username" />
          </div>

          <div class="form-group mt-4">
            <x-label for="password" value="{{ __('Contraseña') }}" />
            <x-input id="password" class="form-control" type="password" name="password" required
              autocomplete="new-password" />
          </div>

          <div class="form-group mt-4">
            <x-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
            <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation"
              required autocomplete="new-password" />
          </div>

          @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
          <div class="mt-4">
            <x-label for="terms">
              <div class="flex items-center">
                <x-checkbox name="terms" id="terms" required />

                <div class="ms-2">
                  {!! __('I agree to the :terms_of_service and :privacy_policy', [
                  'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                  'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                  ]) !!}
                </div>
              </div>
            </x-label>
          </div>
          @endif

          <div class="flex items-center justify-between mt-4">
            <a class="forgot-password" href="{{ route('login') }}">
              {{ __('¿Ya estás registrado?') }}
            </a>
            <x-button class="btn btn-primary">
              {{ __('Registrarse') }}
            </x-button>
          </div>
          <div class="flex items-center justify-center mt-4">
                                
            <a  class="forgot-password" href="{{ url('/#') }}">
            <!-- Parte Comentada es la original -->
                {{ __('Volver ') }}
            </a>
    </div>
        </form>
      </x-authentication-card>
    </x-guest-layout>
  </div>
</body>

</html>
