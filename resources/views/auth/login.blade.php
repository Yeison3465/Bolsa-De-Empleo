<x-guest-layout>
    <div class="max-w-md w-full mx-auto my-8 bg-white rounded-2xl shadow-xl overflow-hidden relative">
        <!-- Borde superior con degradado -->
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 to-purple-500"></div>

        <div class="px-8 pt-8 pb-4 text-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Iniciar Sesión</h1>
            <p class="text-gray-500 text-sm">Ingresa tus credenciales para acceder</p>
        </div>

        <div class="px-8 pb-8">
            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-6 p-4 bg-green-50 text-green-700 rounded-lg border-l-4 border-green-500 animate-[slideDown_0.4s_ease-out]">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-5">
                    <label for="email" class="block font-medium text-gray-700 mb-2 text-sm">{{ __('Email') }}</label>
                    <input id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg transition duration-200 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 text-sm shadow-sm" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                    @error('email')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-5">
                    <label for="password" class="block font-medium text-gray-700 mb-2 text-sm">{{ __('Password') }}</label>
                    <input id="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg transition duration-200 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 text-sm shadow-sm" type="password" name="password" required autocomplete="current-password" />
                    @error('password')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-500 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-4 h-4" name="remember">
                    <label for="remember_me" class="ml-2 text-sm text-gray-600">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <div class="flex items-center justify-between mt-6">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 hover:text-gray-800 hover:underline transition duration-200" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button type="submit" class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-medium rounded-lg transition duration-200 shadow hover:translate-y-[-2px] hover:shadow-md active:translate-y-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </div>

        <div class="px-8 py-4 text-center bg-gray-50 border-t border-gray-100">
            <a href="{{ route('register') }}" class="text-sm text-gray-600 hover:text-gray-800 hover:underline transition duration-200">
                ¿No tienes una cuenta? <span class="font-semibold text-blue-500">Regístrate aquí</span>
            </a>
        </div>
    </div>

    <script>
        // Animación sutil para los elementos del formulario
        document.addEventListener('DOMContentLoaded', function() {
            const formElements = document.querySelectorAll('.mb-5, .flex.items-center.justify-between');
            formElements.forEach((element, index) => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(10px)';
                setTimeout(() => {
                    element.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</x-guest-layout>
