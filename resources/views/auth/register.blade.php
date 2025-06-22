<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registro - Instituto Tecnológico</title>

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
        </style>
    </head>
    <body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <div class="bg-white p-8 rounded-xl card-shadow">
                <div class="flex justify-center mb-6">
                    <div class="bg-yellow-400 p-3 rounded-lg inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                </div>
                
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Crear <span class="highlight-text">Cuenta</span></h2>
                
                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="input-label">Nombre Completo</label>
                        <input id="name" class="text-input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        @error('name')
                            <p class="input-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="input-label">Correo Electrónico</label>
                        <input id="email" class="text-input" type="email" name="email" :value="old('email')" required autocomplete="email" />
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
                                required autocomplete="new-password" />
                        @error('password')
                            <p class="input-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="input-label">Confirmar Contraseña</label>
                        <input id="password_confirmation" class="text-input"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                        @error('password_confirmation')
                            <p class="input-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <a href="{{ route('login') }}" class="text-sm link-primary">
                            ¿Ya tienes una cuenta?
                        </a>

                        <button type="submit" class="btn-primary text-white py-2 px-6 rounded-lg font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 hover:shadow-md transition-all">
                            Registrarse
                        </button>
                    </div>
                </form>
            </div>
            
            <div class="mt-6 text-center text-sm text-gray-600">
                <p>© {{ date('Y') }} Instituto Tecnológico. Todos los derechos reservados.</p>
            </div>
        </div>
    </body>
</html>