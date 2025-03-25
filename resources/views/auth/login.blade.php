@extends('layouts.appAuth')

@section('content')
<div class="login-box">
  <!-- Fondo con imagen difuminada -->
  <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-image: url('/backend/dist/img/welcome/landing.jpg'); background-size: cover; background-position: center; opacity: 0.4; filter: blur(5px); z-index: -1;"></div>

  <div class="login-logo">
  <img src="{{ asset('img/cocina.webp') }}" alt="Logo" class="logo-img">
  <br>
    <a href="{{ url('/') }}" class="text-[#8B4513] dark:text-[#E6A15C]"><b>La Cocina</b> de Mamá</a>
  </div>

  <div class="card" style="background-color: rgba(255, 255, 255, 0.9); border-radius: 10px; overflow: hidden; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);">
    <div class="card-body login-card-body" style="background-color: transparent; border-radius: 10px;">
      <p class="login-box-msg" style="color: #8B4513; font-weight: 500;">{{ __('Inicia sesión para comenzar') }}</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email input -->
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Correo electrónico') }}" value="{{ old('email') }}" required autocomplete="email" autofocus style="border-color: #E6A15C; border-radius: 5px 0 0 5px;">
          <div class="input-group-append">
            <div class="input-group-text" style="background-color: #8B4513; border-color: #8B4513; border-radius: 0 5px 5px 0;">
              <span class="fas fa-envelope" style="color: white;"></span>
            </div>
          </div>
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <!-- Password input -->
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Contraseña') }}" required autocomplete="current-password" style="border-color: #E6A15C; border-radius: 5px 0 0 5px;">
          <div class="input-group-append">
            <div class="input-group-text" style="background-color: #8B4513; border-color: #8B4513; border-radius: 0 5px 5px 0;">
              <span class="fas fa-lock" style="color: white;"></span>
            </div>
          </div>
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <!-- Remember me and login button -->
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember" style="color: #6d3710;">
                {{ __('Recordarme') }}
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-block" style="background-color: #8B4513; border-color: #8B4513; color: white; transition: all 0.3s ease;">{{ __('Entrar') }}</button>
          </div>
        </div>
      </form>

      <p class="mb-1 mt-3">
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}" style="color: #8B4513; transition: color 0.3s ease;">{{ __('¿Olvidaste tu contraseña?') }}</a>
        @endif
      </p>
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center" style="color: #8B4513; transition: color 0.3s ease;">{{ __('Registrar una nueva cuenta') }}</a>
      </p>
    </div>
  </div>
</div>

<style>
  body {
    background-color: #f8f9fa;
    font-family: 'Figtree', sans-serif;
  }

  .dark body {
    background-color: #18181b;
    color: rgba(255, 255, 255, 0.8);
  }


  .login-logo {
    margin-bottom: 1.5rem;
    text-align: center;
    font-size: 2.1rem;
    font-weight: 300;
  }
  .login-logo img {
    width: 80px; /* Ajusta el tamaño del logo */
    height: auto;
    border-radius: 50%;
}

  .login-logo a {
    text-decoration: none;
    color: #E6A15C;
  }

  .login-box-msg {
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
  }

  .btn:hover {
    background-color: #6d3710 !important;
    border-color: #6d3710 !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .form-control:focus {
    border-color: #E6A15C;
    box-shadow: 0 0 0 0.2rem rgba(230, 161, 92, 0.25);
  }

  .dark .card {
    background-color: rgba(24, 24, 27, 0.9) !important;
  }

  .dark .login-box-msg,
  .dark label,
  .dark a {
    color: #E6A15C !important;
  }

  .dark .form-control {
    background-color: rgba(39, 39, 42, 0.8);
    border-color: #52525b;
    color: white;
  }

  .dark .form-control:focus {
    border-color: #E6A15C;
    box-shadow: 0 0 0 0.2rem rgba(230, 161, 92, 0.25);
  }

  /* Animación sutil para la tarjeta */
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .card {
    animation: fadeIn 0.6s ease-out forwards;
  }
</style>
@endsection
