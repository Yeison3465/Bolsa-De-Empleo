<x-app-layout>
    <div class="container mx-auto p-6 bg-white shadow rounded">
        <div class="flex items-center mb-6 pb-4 border-b border-gray-200">
            <h1 class="text-xl font-bold text-gray-800 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Ofertas de Trabajo
            </h1>
        </div>

        @foreach ($jobOffers as $job)
            <div class="pl-5 pr-4 py-5 mb-4 bg-gray-50 shadow-sm rounded-lg border-l-4 border-transparent hover:border-l-blue-500 hover:bg-gray-100 hover:translate-x-1 transition-all duration-200 ease-in-out">
                <div class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <h2 class="text-lg font-semibold text-gray-800">{{ $job->title }}</h2>
                </div>

                <div class="flex flex-wrap gap-4 mb-3 text-sm">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <span class="text-gray-700"><strong>Empresa:</strong> {{ $job->company_name }}</span>
                    </div>

                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-gray-600">{{ $job->location }}</span>
                    </div>
                </div>

                <div class="pl-7 border-l border-dashed border-gray-200 my-3">
                    <p class="text-gray-700">{{ Str::limit($job->description, 100) }}</p>
                </div>

                <div class="flex justify-between items-center mt-4 pt-3 border-t border-gray-100">
                    <div class="bg-green-50 text-green-800 px-3 py-1 rounded-full font-semibold text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ $job->salary ? '$' . number_format($job->salary, 2) : 'Salario no especificado' }}
                    </div>

                    <a href="{{ route('job_offers.show', $job->id) }}" class="inline-flex items-center text-blue-500 font-medium px-4 py-2 rounded-md relative overflow-hidden hover:bg-blue-500 hover:text-white transition-colors duration-200">
                        Ver detalle
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1.5 transform transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach

        <!-- Paginación -->
        <div class="mt-4 pt-4 border-t border-gray-200">
            {{ $jobOffers->links() }}
        </div>
    </div>

    <script>
        // Animación sutil para los elementos de la lista al cargar
        document.addEventListener('DOMContentLoaded', function() {
            const jobListings = document.querySelectorAll('[class*="border-l-4"]');
            jobListings.forEach((listing, index) => {
                listing.classList.add('opacity-0', 'translate-y-5');
                setTimeout(() => {
                    listing.classList.remove('opacity-0', 'translate-y-5');
                    listing.classList.add('transition-all', 'duration-400', 'ease-in-out', 'opacity-100', 'translate-y-0');
                }, index * 150);
            });
        });
    </script>
</x-app-layout>
