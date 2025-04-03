<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="bg-white shadow rounded-lg p-6 max-w-3xl mx-auto">
            <div class="relative pb-3 mb-6 border-b border-gray-200">
                <h1 class="text-2xl font-bold text-gray-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Editar Oferta
                </h1>
            </div>

            <form action="{{ route('job_offers.update', $jobOffer->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-6">
                    <label for="title" class="block font-medium text-gray-700 mb-2">Título</label>
                    <input type="text" name="title" id="title" value="{{ $jobOffer->title }}" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 text-base" required>
                </div>

                <div class="mb-6">
                    <label for="company_name" class="block font-medium text-gray-700 mb-2">Nombre de la Empresa</label>
                    <input type="text" name="company_name" id="company_name" value="{{ $jobOffer->company_name }}" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 text-base" required>
                </div>

                <div class="mb-6">
                    <label for="location" class="block font-medium text-gray-700 mb-2">Ubicación</label>
                    <input type="text" name="location" id="location" value="{{ $jobOffer->location }}" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 text-base" required>
                </div>

                <div class="mb-6">
                    <label for="description" class="block font-medium text-gray-700 mb-2">Descripción</label>
                    <textarea name="description" id="description" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 text-base min-h-[120px] resize-y" required>{{ $jobOffer->description }}</textarea>
                </div>

                <div class="mb-6">
                    <label for="salary" class="block font-medium text-gray-700 mb-2">Salario</label>
                    <input type="number" name="salary" id="salary" value="{{ $jobOffer->salary }}" class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm transition focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 text-base">
                </div>

                <div class="flex mt-8">
                    <button type="submit" class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white font-medium rounded-md transition shadow hover:from-green-600 hover:to-green-700 hover:transform hover:-translate-y-0.5 hover:shadow-md active:translate-y-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Actualizar
                    </button>
                    <a href="{{ route('job_offers.myOffers') }}" class="inline-flex items-center justify-center px-6 py-3 bg-gray-500 text-white font-medium rounded-md transition shadow hover:bg-gray-600 hover:transform hover:-translate-y-0.5 hover:shadow-md active:translate-y-0 ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Animación sutil para los campos del formulario
        document.addEventListener('DOMContentLoaded', function() {
            const formElements = document.querySelectorAll('input, textarea, button, a.inline-flex');
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
