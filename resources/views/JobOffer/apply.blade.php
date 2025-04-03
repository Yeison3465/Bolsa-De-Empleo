<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="bg-white shadow rounded-lg p-6 max-w-3xl mx-auto">
            <div class="border-b border-gray-200 pb-5 mb-6">
                <h1 class="text-2xl font-bold text-gray-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Postularse a: {{ $jobOffer->title }}
                </h1>
                <div class="mt-4">
                    <div class="flex items-center mb-2 text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <span class="font-semibold mr-2">Empresa:</span> {{ $jobOffer->company_name }}
                    </div>
                    <div class="flex items-center text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="font-semibold mr-2">Ubicación:</span> {{ $jobOffer->location }}
                    </div>
                </div>
            </div>

            @if(session('success'))
                <div class="flex items-center bg-green-50 text-green-800 p-4 rounded-lg mb-6 border-l-4 border-green-500 animate-[fadeIn_0.4s_ease-out]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <form action="{{ route('applications.store') }}" method="POST" enctype="multipart/form-data" class="mt-6">
                @csrf
                <input type="hidden" name="job_offer_id" value="{{ $jobOffer->id }}">

                <div class="mb-6">
                    <label for="first_name" class="block font-semibold text-gray-700 mb-2">Nombre</label>
                    <input type="text" name="first_name" id="first_name" value="{{ Auth::user()->name }}" class="w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-base bg-gray-100 cursor-not-allowed" required readonly>
                </div>

                <div class="mb-6">
                    <label for="last_name" class="block font-semibold text-gray-700 mb-2">Apellido</label>
                    <input type="text" name="last_name" id="last_name" class="w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-base" required>
                </div>

                <div class="mb-6">
                    <label for="email" class="block font-semibold text-gray-700 mb-2">Correo Electrónico</label>
                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-base bg-gray-100 cursor-not-allowed" required readonly>
                </div>

                <div class="mb-6">
                    <label for="cv" class="block font-semibold text-gray-700 mb-2">Adjuntar CV (PDF)</label>
                    <div class="relative">
                        <label for="cv" class="flex items-center px-3 py-3 bg-gray-100 border border-dashed border-gray-300 rounded-md cursor-pointer hover:bg-gray-200 hover:border-gray-400 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span>Seleccionar archivo PDF</span>
                        </label>
                        <input type="file" name="cv" id="cv" accept=".pdf" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" required>
                        <div id="file-name" class="mt-2 text-sm text-gray-600 hidden">Ningún archivo seleccionado</div>
                    </div>
                </div>

                <div class="flex flex-col items-start mt-8">
                    <button type="submit" class="inline-flex items-center justify-center font-medium px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-md shadow hover:translate-y-[-2px] hover:shadow-md hover:from-blue-600 hover:to-blue-700 active:translate-y-0 transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Enviar Postulación
                    </button>
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center font-medium px-6 py-3 bg-gray-500 text-white rounded-md shadow hover:translate-y-[-2px] hover:shadow-md hover:bg-gray-600 active:translate-y-0 transition-all duration-200 mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Volver
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Mostrar el nombre del archivo seleccionado
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('cv');
            const fileNameDisplay = document.getElementById('file-name');

            fileInput.addEventListener('change', function() {
                if (this.files && this.files.length > 0) {
                    fileNameDisplay.textContent = this.files[0].name;
                    fileNameDisplay.classList.remove('hidden');
                    fileNameDisplay.classList.add('block');
                } else {
                    fileNameDisplay.textContent = 'Ningún archivo seleccionado';
                    fileNameDisplay.classList.add('hidden');
                    fileNameDisplay.classList.remove('block');
                }
            });

            // Animación para los campos del formulario usando Tailwind + JS
            const formElements = document.querySelectorAll('div.mb-6, button, a.inline-flex');
            formElements.forEach((element, index) => {
                element.classList.add('opacity-0', 'translate-y-2');
                setTimeout(() => {
                    element.classList.remove('opacity-0', 'translate-y-2');
                    element.classList.add('transition-all', 'duration-300', 'ease-in-out', 'opacity-100', 'translate-y-0');
                }, index * 100);
            });
        });
    </script>
</x-app-layout>
