<x-guest-layout>
    <div class="max-w-md w-full mx-auto my-8 bg-white rounded-2xl shadow-xl overflow-hidden relative">
        <!-- Borde superior con degradado -->
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 to-purple-500"></div>

        <div class="px-8 pt-8 pb-4 text-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Crear Cuenta</h1>
            <p class="text-gray-500 text-sm">Complete el formulario para registrarse</p>
        </div>

        <div class="px-8 pb-8">
            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-6 p-4 bg-green-50 text-green-700 rounded-lg border-l-4 border-green-500 animate-[slideDown_0.4s_ease-out]">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-5">
                    <label for="name" class="block font-medium text-gray-700 mb-2 text-sm">{{ __('Name') }}</label>
                    <input id="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg transition duration-200 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 text-sm shadow-sm" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                    @error('name')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="mb-5">
                    <label for="email" class="block font-medium text-gray-700 mb-2 text-sm">{{ __('Email') }}</label>
                    <input id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg transition duration-200 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 text-sm shadow-sm" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                    @error('email')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-5">
                    <label for="password" class="block font-medium text-gray-700 mb-2 text-sm">{{ __('Password') }}</label>
                    <input id="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg transition duration-200 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 text-sm shadow-sm" type="password" name="password" required autocomplete="new-password" />
                    @error('password')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-5">
                    <label for="password_confirmation" class="block font-medium text-gray-700 mb-2 text-sm">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" class="w-full px-4 py-3 border border-gray-300 rounded-lg transition duration-200 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 text-sm shadow-sm" type="password" name="password_confirmation" required autocomplete="new-password" />
                    @error('password_confirmation')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a class="text-sm text-gray-600 hover:text-gray-800 hover:underline transition duration-200" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <button type="submit" class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-medium rounded-lg transition duration-200 shadow hover:translate-y-[-2px] hover:shadow-md active:translate-y-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>

        <div class="px-8 py-4 text-center bg-gray-50 border-t border-gray-100">
            <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-800 hover:underline transition duration-200">
                ¿Ya tienes una cuenta? <span class="font-semibold text-blue-500">Inicia sesión aquí</span>
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
