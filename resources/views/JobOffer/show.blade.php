<x-app-layout>
    <div class="container mx-auto p-8 max-w-4xl">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-100">
            <!-- Header section with company info -->
            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 border-b border-gray-200">
                <h1 class="text-3xl font-bold text-gray-800">{{ $jobOffer->title }}</h1>
                <div class="flex flex-col sm:flex-row sm:items-center justify-between mt-3">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <span class="text-lg text-gray-700 font-medium">{{ $jobOffer->company_name }}</span>
                    </div>
                    <div class="flex items-center mt-2 sm:mt-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-gray-600">{{ $jobOffer->location }}</span>
                    </div>
                </div>
            </div>

            <!-- Job details section -->
            <div class="p-6">
                <!-- Salary highlight -->
                <div class="mb-6 p-4 bg-green-50 rounded-lg border border-green-100">
                    <h2 class="text-lg font-semibold text-gray-700 mb-2">Salario</h2>
                    <p class="text-2xl font-bold text-green-600">
                        {{ $jobOffer->salary ? '$' . number_format($jobOffer->salary, 2) : 'No especificado' }}
                    </p>
                </div>

                <!-- Job description -->
                <div class="mb-6">
                    <h2 class="text-lg font-semibold text-gray-700 mb-2">Descripción del puesto</h2>
                    <div class="prose text-gray-700 max-w-none">
                        {{ $jobOffer->description }}
                    </div>
                </div>

                <!-- Call to action buttons -->
                <div class="mt-8 flex flex-col sm:flex-row items-center gap-4">
                    <a href="{{ route('job_offers.apply', $jobOffer->id) }}"
                       class="w-full sm:w-auto text-center bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-8 rounded-lg transition duration-200 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Postularse ahora
                    </a>
                    <a href="{{ route('dashboard') }}"
                       class="w-full sm:w-auto text-center border border-gray-300 bg-white hover:bg-gray-50 text-gray-700 font-medium py-3 px-8 rounded-lg transition duration-200">
                        Volver al dashboard
                    </a>
                </div>
            </div>

            <!-- Additional job information section (optional) -->
            <div class="bg-gray-50 p-6 border-t border-gray-100">
                <div class="flex flex-wrap gap-4">
                    <!-- You can add additional information here like: -->
                    @if(isset($jobOffer->publication_date))
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="text-sm text-gray-600">Publicado: {{ $jobOffer->publication_date }}</span>
                    </div>
                    @endif

                    @if(isset($jobOffer->job_type))
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="text-sm text-gray-600">Tipo: {{ $jobOffer->job_type }}</span>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
