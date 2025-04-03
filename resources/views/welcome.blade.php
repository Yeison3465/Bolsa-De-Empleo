<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bienvenido a nuestra plataforma">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 text-gray-800 min-h-screen font-sans" style="font-family: 'Poppins', sans-serif;">
    <!-- Header/Nav -->
    <nav class="bg-white shadow py-4">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <div class="font-bold text-xl text-blue-600">
                <!-- You can add your logo here -->
                <span>YourLogo</span>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-6 py-12 flex flex-col md:flex-row items-center justify-between">
        <!-- Left Side Content -->
        <div class="md:w-1/2 mb-12 md:mb-0">
            <h1 class="text-5xl font-bold mb-6 text-gray-800 leading-tight">
                Bienvenido a <span class="text-blue-600">Nuestra Plataforma</span>
            </h1>
            <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                Conecta con oportunidades, gestiona tus proyectos y haz crecer tu carrera profesional con nuestra plataforma integral.
            </p>
            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="{{ route('login') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-medium hover:bg-blue-700 transition duration-300 shadow-md text-center">
                    Iniciar Sesión
                </a>
                <a href="{{ route('register') }}" class="bg-white text-blue-600 border border-blue-600 px-8 py-3 rounded-lg font-medium hover:bg-blue-50 transition duration-300 shadow-sm text-center">
                    Registrarse
                </a>
            </div>
        </div>

        <!-- Right Side Illustration -->
        <div class="md:w-1/2 flex justify-center">
            <div class="bg-white p-6 rounded-xl shadow-lg max-w-md w-full">
                <div class="flex items-center justify-center h-64 bg-blue-50 rounded-lg mb-6">
                    <!-- You can replace this with an actual image -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-blue-500 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-center text-xl font-semibold text-gray-800 mb-2">¿Aún no tienes cuenta?</h3>
                <p class="text-center text-gray-600 mb-6">Crea una cuenta y descubre todas las ventajas que tenemos para ti.</p>
                <a href="{{ route('register') }}" class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg font-medium hover:bg-blue-700 transition duration-300">
                    Crear una cuenta
                </a>
            </div>
        </div>
    </div>

    <!-- Feature Section -->
    <div class="bg-white py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Nuestras Características</h2>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                    <div class="bg-blue-100 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Seguridad Garantizada</h3>
                    <p class="text-gray-600">Protegemos tu información con los más altos estándares de seguridad del mercado.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                    <div class="bg-blue-100 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Rendimiento Óptimo</h3>
                    <p class="text-gray-600">Nuestra plataforma está diseñada para ofrecerte la mejor experiencia de usuario posible.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                    <div class="bg-blue-100 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Siempre Disponible</h3>
                    <p class="text-gray-600">Accede a nuestros servicios desde cualquier dispositivo, en cualquier momento.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <p>&copy; 2025 YourCompany. Todos los derechos reservados.</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white transition duration-300">Términos</a>
                    <a href="#" class="text-gray-300 hover:text-white transition duration-300">Privacidad</a>
                    <a href="#" class="text-gray-300 hover:text-white transition duration-300">Contacto</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
