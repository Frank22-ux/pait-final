<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Editar Perfil - Instituto Tecnológico</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            .header-bg {
                background: linear-gradient(135deg, #1e40af 0%, #1e3a8a 100%);
            }
            .card-shadow {
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            }
            .btn-primary {
                background-color: #f59e0b;
                transition: all 0.3s ease;
            }
            .btn-primary:hover {
                background-color: #d97706;
            }
            .btn-danger {
                background-color: #ef4444;
                transition: all 0.3s ease;
            }
            .btn-danger:hover {
                background-color: #dc2626;
            }
            .highlight-text {
                color: #f59e0b;
            }
            .input-label {
                color: #1e3a8a;
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
            .section-title {
                color: #1e3a8a;
                font-size: 1.25rem;
                font-weight: 600;
                margin-bottom: 1.5rem;
                padding-bottom: 0.5rem;
                border-bottom: 2px solid #f59e0b;
            }
        </style>
    </head>
    <body class="font-sans antialiased min-h-screen bg-gray-50">
        <div class="flex">
            <!-- Sidebar -->
            <div class="hidden md:flex md:w-64 flex-col bg-white border-r border-gray-200">
                <div class="flex items-center justify-center h-16 px-4 header-bg">
                    <div class="flex items-center">
                        <div class="bg-yellow-400 p-2 rounded-lg mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <span class="text-white font-bold text-xl">Instituto</span>
                    </div>
                </div>
                <div class="flex-grow px-4 py-6">
                    <nav class="space-y-1">
                        <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-gray-700 nav-link">
                            <svg class="h-5 w-5 mr-3 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Inicio
                        </a>
                        <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-3 text-gray-700 nav-link active-nav">
                            <svg class="h-5 w-5 mr-3 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Perfil
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Header -->
                <header class="header-bg shadow">
                    <div class="flex items-center justify-between h-16 px-4">
                        <div class="flex items-center">
                            <button class="md:hidden text-white focus:outline-none">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="flex items-center text-sm font-medium text-white focus:outline-none transition">
                                        <div>{{ Auth::user()->name }}</div>
                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        Perfil
                                    </x-dropdown-link>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            Cerrar Sesión
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>
                </header>

                <!-- Content -->
                <main class="flex-1 overflow-y-auto p-6 bg-gray-50">
                    <div class="max-w-4xl mx-auto space-y-6">
                        <!-- Información del Perfil -->
                        <div class="bg-white p-6 rounded-lg card-shadow">
                            <h2 class="section-title">Información del Perfil</h2>
                            
                            <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
                                @csrf
                                @method('patch')

                                <div>
                                    <label for="name" class="input-label">Nombre</label>
                                    <input id="name" name="name" type="text" class="text-input" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
                                    @error('name')
                                        <p class="input-error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email" class="input-label">Correo Electrónico</label>
                                    <input id="email" name="email" type="email" class="text-input" value="{{ old('email', $user->email) }}" required autocomplete="email" />
                                    @error('email')
                                        <p class="input-error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="flex items-center gap-4">
                                    <button type="submit" class="btn-primary text-white py-2 px-6 rounded-lg font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 hover:shadow-md transition-all">
                                        Guardar Cambios
                                    </button>

                                    @if (session('status') === 'profile-updated')
                                        <p class="text-sm text-green-600">Perfil actualizado correctamente.</p>
                                    @endif
                                </div>
                            </form>
                        </div>

                        <!-- Actualizar Contraseña -->
                        <div class="bg-white p-6 rounded-lg card-shadow">
                            <h2 class="section-title">Actualizar Contraseña</h2>
                            
                            <form method="post" action="{{ route('password.update') }}" class="space-y-6">
                                @csrf
                                @method('put')

                                <div>
                                    <label for="current_password" class="input-label">Contraseña Actual</label>
                                    <input id="current_password" name="current_password" type="password" class="text-input" autocomplete="current-password" />
                                    @error('current_password')
                                        <p class="input-error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="password" class="input-label">Nueva Contraseña</label>
                                    <input id="password" name="password" type="password" class="text-input" autocomplete="new-password" />
                                    @error('password')
                                        <p class="input-error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="password_confirmation" class="input-label">Confirmar Contraseña</label>
                                    <input id="password_confirmation" name="password_confirmation" type="password" class="text-input" autocomplete="new-password" />
                                    @error('password_confirmation')
                                        <p class="input-error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="flex items-center gap-4">
                                    <button type="submit" class="btn-primary text-white py-2 px-6 rounded-lg font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 hover:shadow-md transition-all">
                                        Actualizar Contraseña
                                    </button>

                                    @if (session('status') === 'password-updated')
                                        <p class="text-sm text-green-600">Contraseña actualizada correctamente.</p>
                                    @endif
                                </div>
                            </form>
                        </div>

                        <!-- Eliminar Cuenta -->
                        <div class="bg-white p-6 rounded-lg card-shadow">
                            <h2 class="section-title">Eliminar Cuenta</h2>
                            <p class="text-gray-600 mb-4">Una vez que se elimine su cuenta, todos sus recursos y datos se borrarán permanentemente. Antes de eliminar su cuenta, descargue cualquier información que desee conservar.</p>
                            
                            <form method="post" action="{{ route('profile.destroy') }}" class="space-y-6">
                                @csrf
                                @method('delete')

                                <div>
                                    <label for="password" class="input-label">Contraseña</label>
                                    <input id="password" name="password" type="password" class="text-input" placeholder="Ingrese su contraseña para confirmar" />
                                    @error('password')
                                        <p class="input-error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit" class="btn-danger text-white py-2 px-6 rounded-lg font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 hover:shadow-md transition-all" onclick="return confirm('¿Está seguro de que desea eliminar su cuenta permanentemente?')">
                                    Eliminar Cuenta
                                </button>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>