<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registrar Alumno - Instituto Tecnológico</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

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
            .highlight-text {
                color: #f59e0b;
            }
            .form-card {
                border-left: 4px solid #f59e0b;
            }
            .nav-link {
                transition: all 0.2s ease;
            }
            .nav-link:hover {
                background-color: rgba(245, 158, 11, 0.1);
            }
            .active-nav {
                background-color: rgba(245, 158, 11, 0.2);
                border-left: 4px solid #f59e0b;
            }
        </style>
    </head>
    <body class="font-sans antialiased min-h-screen bg-gray-50">
        <div class="flex">
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
                        <a href="{{ route('alumnos.create') }}" class="flex items-center px-4 py-3 text-gray-700 nav-link active-nav">
                            <svg class="h-5 w-5 mr-3 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            Estudiantes
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-700 nav-link">
                            <svg class="h-5 w-5 mr-3 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            Cursos
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-700 nav-link">
                            <svg class="h-5 w-5 mr-3 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Configuración
                        </a>
                    </nav>
                </div>
            </div>

            <div class="flex-1 flex flex-col overflow-hidden">
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

                <main class="flex-1 overflow-y-auto p-6 bg-gray-50">
                    <div class="max-w-7xl mx-auto">
                        <div class="flex justify-between items-center mb-6">
                            <h1 class="text-2xl font-bold text-gray-800">Registrar Nuevo Alumno</h1>
                            <a href="{{ route('dashboard') }}" class="text-blue-600 hover:text-blue-800">
                                ← Volver al Inicio
                            </a>
                        </div>

                        <div class="bg-white rounded-lg form-card card-shadow overflow-hidden p-6">
                            @if(session('success'))
                                <div class="mb-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4">
                                    <p>{{ session('success') }}</p>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('alumnos.store') }}">
                                @csrf
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="primer_nombre" class="block text-sm font-medium text-gray-700">Primer Nombre *</label>
                                        <input 
                                            type="text" 
                                            id="primer_nombre" 
                                            name="primer_nombre" 
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                            required
                                        >
                                        @error('primer_nombre')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="segundo_nombre" class="block text-sm font-medium text-gray-700">Segundo Nombre</label>
                                        <input 
                                            type="text" 
                                            id="segundo_nombre" 
                                            name="segundo_nombre" 
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                        >
                                    </div>

                                    <div>
                                        <label for="primer_apellido" class="block text-sm font-medium text-gray-700">Primer Apellido *</label>
                                        <input 
                                            type="text" 
                                            id="primer_apellido" 
                                            name="primer_apellido" 
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                            required
                                        >
                                        @error('primer_apellido')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="segundo_apellido" class="block text-sm font-medium text-gray-700">Segundo Apellido</label>
                                        <input 
                                            type="text" 
                                            id="segundo_apellido" 
                                            name="segundo_apellido" 
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                        >
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="correo_institucional" class="block text-sm font-medium text-gray-700">Correo Institucional *</label>
                                        <input 
                                            type="email" 
                                            id="correo_institucional" 
                                            name="correo_institucional" 
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                            required
                                        >
                                        @error('correo_institucional')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="semestre" class="block text-sm font-medium text-gray-700">Semestre *</label>
                                        <select 
                                            id="semestre" 
                                            name="semestre" 
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                            required
                                        >
                                            <option value="">Seleccione un semestre</option>
                                            @for($i = 1; $i <= 12; $i++)
                                                <option value="{{ $i }}" {{ old('semestre') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                            @endfor
                                        </select>
                                        @error('semestre')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="carrera" class="block text-sm font-medium text-gray-700">Carrera *</label>
                                        <input 
                                            type="text" 
                                            id="carrera" 
                                            name="carrera" 
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                            required
                                        >
                                        @error('carrera')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mt-8 flex justify-end">
                                    <button 
                                        type="submit" 
                                        class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition"
                                    >
                                        <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                        </svg>
                                        Registrar Alumno
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>