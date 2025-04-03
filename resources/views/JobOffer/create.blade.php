<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="bg-white shadow rounded-lg p-6 max-w-3xl mx-auto">
            <div class="relative pb-3 mb-6 border-b border-gray-200">
                <h1 class="text-2xl font-bold text-gray-800">Crear una nueva oferta de empleo</h1>
            </div>

            @if(session('success'))
                <div class="flex items-center bg-green-50 text-green-800 p-4 rounded-lg mb-6 border-l-4 border-green-500 animate-[fadeIn_0.4s_ease-out]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <form action="{{ route('job_offers.store') }}" method="POST">
                @csrf

                <div class="mb-6">
                    <label for="title" class="block font-medium text-gray-700 mb-2">Título del trabajo</label>
                    <input type="text" name="title" id="title" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-base" placeholder="Ej: Desarrollador Web Frontend" required>
                </div>

                <div class="mb-6">
                    <label for="company_name" class="block font-medium text-gray-700 mb-2">Nombre de la Empresa</label>
                    <input type="text" name="company_name" id="company_name" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-base" placeholder="Ej: TechSolutions S.A." required>
                </div>

                <div class="mb-6">
                    <label for="description" class="block font-medium text-gray-700 mb-2">Descripción</label>
                    <textarea name="description" id="description" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-base min-h-[120px] resize-y" placeholder="Describe detalladamente las responsabilidades y requisitos del puesto..." required></textarea>
                </div>

                <div class="mb-6">
                    <label for="location" class="block font-medium text-gray-700 mb-2">Ubicación</label>
                    <input type="text" name="location" id="location" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-base" placeholder="Ej: Madrid, España" required>
                </div>

                <div class="mb-6">
                    <label for="salary" class="block font-medium text-gray-700 mb-2">
                        Salario
                        <span class="text-xs text-gray-500 font-normal ml-2">(opcional)</span>
                    </label>
                    <input type="number" name="salary" id="salary" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-base" placeholder="Ej: 30000">
                </div>

                <button type="submit" class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-medium rounded-md transition shadow hover:from-blue-600 hover:to-blue-700 hover:transform hover:-translate-y-0.5 hover:shadow-md active:translate-y-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Publicar Oferta
                </button>
            </form>
        </div>
    </div>

    <script>
        // Animación sutil para los campos del formulario
        document.addEventListener('DOMContentLoaded', function() {
            const formElements = document.querySelectorAll('input, textarea');
            formElements.forEach((element, index) => {
                element.classList.add('opacity-0', 'translate-y-2');
                setTimeout(() => {
                    element.classList.add('transition-all', 'duration-300', 'ease-in-out');
                    element.classList.remove('opacity-0', 'translate-y-2');
                }, index * 100);
            });
        });
    </script>
</x-app-layout>
