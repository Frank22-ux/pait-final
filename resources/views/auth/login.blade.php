<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Iniciar Sesión - Instituto Tecnológico</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            .institute-bg {
                background: linear-gradient(135deg, #1e40af 0%, #1e3a8a 100%);
            }
            .card-shadow {
                box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            }
            .btn-primary {
                background-color: #f59e0b; /* Amarillo */
                transition: all 0.3s ease;
            }
            .btn-primary:hover {
                background-color: #d97706; /* Amarillo oscuro */
            }
            .input-focus:focus {
                border-color: #3b82f6; /* Azul */
                box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
            }
            .highlight-text {
                color: #f59e0b; /* Amarillo */
            }
            .link-primary {
                color: #3b82f6; /* Azul */
            }
            .link-primary:hover {
                color: #2563eb; /* Azul oscuro */
                text-decoration: underline;
            }
            .input-label {
                color: #1e3a8a; /* Azul oscuro */
                font-weight: 500;
                display: block;
                margin-bottom: 0.5rem;
            }
            .text-input {
                border: 1px solid #d1d5db;
                border-radius: 0.5rem;
                padding: 0.75rem 1rem;
                width: 100%;
                transition: all 0.2s ease;
            }
            .text-input:focus {
                outline: none;
                border-color: #3b82f6;
                box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
            }
            .input-error {
                color: #dc2626;
                font-size: 0.875rem;
                margin-top: 0.5rem;
            }
            .session-status {
                color: #1e40af;
                font-weight: 500;
                margin-bottom: 1rem;
                text-align: center;
            }
        </style>
    </head>
    <body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <div class="bg-white p-8 rounded-xl card-shadow">
                <div class="flex justify-center mb-6">
                    <div class="bg-yellow-400 p-3 rounded-lg inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                        </svg>
                    </div>
                </div>
                
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Iniciar <span class="highlight-text">Sesión</span></h2>
                
                <!-- Session Status -->
                @if (session('status'))
                    <div class="session-status">
                        {{ session('status') }}
                    </div>
                @endif
                
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="input-label">Correo Electrónico</label>
                        <input id="email" class="text-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                        @error('email')
                            <p class="input-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="input-label">Contraseña</label>
                        <input id="password" class="text-input"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                        @error('password')
                            <p class="input-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" class="h-4 w-4 text-yellow-500 focus:ring-yellow-500 border-gray-300 rounded" name="remember">
                        <label for="remember_me" class="ml-2 text-sm text-gray-600">Recordar sesión</label>
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm link-primary">
                                ¿Olvidaste tu contraseña?
                            </a>
                        @endif

                        <button type="submit" class="btn-primary text-white py-2 px-6 rounded-lg font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 hover:shadow-md transition-all">
                            Ingresar
                        </button>
                    </div>
                </form>
                
                @if (Route::has('register'))
                    <div class="mt-6 text-center text-sm text-gray-600">
                        <p>¿No tienes una cuenta? <a href="{{ route('register') }}" class="link-primary">Regístrate aquí</a></p>
                    </div>
                @endif
            </div>
            
            <div class="mt-6 text-center text-sm text-gray-600">
                <p>© {{ date('Y') }} Instituto Tecnológico. Todos los derechos reservados.</p>
            </div>
        </div>
    </body>
</html>