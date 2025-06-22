<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Acceso al Sistema - Instituto</title>

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
            }
        </style>
    </head>
    <body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
        <div class="flex flex-col lg:flex-row w-full max-w-5xl rounded-xl overflow-hidden card-shadow">
            <!-- Panel izquierdo con información del instituto -->
            <div class="institute-bg text-white p-8 lg:p-12 lg:w-1/2 flex flex-col justify-center">
                <div class="mb-8 text-center lg:text-left">
                    <div class="flex justify-center lg:justify-start">
                        <div class="bg-yellow-400 p-2 rounded-lg inline-flex mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                    </div>
                    <h1 class="text-3xl font-bold mb-2">Instituto <span class="highlight-text">Tecnológico</span></h1>
                    <p class="text-blue-100 text-lg">Sistema de Gestión Académica</p>
                </div>
                
                <div class="space-y-4 mt-auto">
                    <div class="flex items-start bg-blue-900 bg-opacity-30 p-4 rounded-lg">
                        <div class="bg-yellow-400 p-2 rounded-full mr-3">
                            <svg class="h-5 w-5 text-blue-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-yellow-200">Acceso Seguro</h3>
                            <p class="text-blue-100 text-sm">Credenciales protegidas con encriptación</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start bg-blue-900 bg-opacity-30 p-4 rounded-lg">
                        <div class="bg-yellow-400 p-2 rounded-full mr-3">
                            <svg class="h-5 w-5 text-blue-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-yellow-200">Plataforma Educativa</h3>
                            <p class="text-blue-100 text-sm">Herramientas para estudiantes y docentes</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Panel derecho con formulario de login -->
            <div class="bg-white p-8 lg:p-12 lg:w-1/2">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Iniciar <span class="highlight-text">Sesión</span></h2>
                
                @if($errors->any())
                    <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded" role="alert">
                        <p class="font-bold">Error</p>
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo Institucional</label>
                        <input id="email" type="email" name="email" required autofocus
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 input-focus focus:outline-none transition duration-150 ease-in-out">
                    </div>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                        <input id="password" type="password" name="password" required
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 input-focus focus:outline-none transition duration-150 ease-in-out">
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-yellow-500 focus:ring-yellow-500 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-700">Recordar sesión</label>
                        </div>
                        
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm link-primary hover:underline">
                                ¿Olvidaste tu contraseña?
                            </a>
                        @endif
                    </div>
                    
                    <div>
                        <button type="submit" class="w-full btn-primary text-white py-3 px-4 rounded-lg font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 hover:shadow-md transition-all">
                            Ingresar al Sistema
                        </button>
                    </div>
                </form>
                
                @if (Route::has('register'))
                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600">
                            ¿No tienes una cuenta? 
                            <a href="{{ route('register') }}" class="link-primary font-medium hover:underline">
                                Regístrate aquí
                            </a>
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>