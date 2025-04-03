<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="bg-white p-4 rounded-lg shadow-sm mb-6 flex flex-wrap gap-2">
            <a href="{{ route('job_offers.create') }}" class="bg-blue-500 hover:bg-blue-600 border border-blue-600 text-white px-4 py-2 rounded flex items-center transition-all duration-200 ease-in-out hover:-translate-y-0.5 hover:shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Crear Oferta de Trabajo
            </a>
            <a href="{{ route('job_offers.all') }}" class="bg-green-500 hover:bg-green-600 border border-green-600 text-white px-4 py-2 rounded flex items-center transition-all duration-200 ease-in-out hover:-translate-y-0.5 hover:shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                Ver Todas las Ofertas
            </a>
            <a href="{{ route('job_offers.myOffers') }}" class="bg-purple-500 hover:bg-purple-600 border border-purple-600 text-white px-4 py-2 rounded flex items-center transition-all duration-200 ease-in-out hover:-translate-y-0.5 hover:shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                </svg>
                Mis Ofertas
            </a>
        </div>

        <h1 class="text-2xl font-bold mt-6 mb-6 inline-block pb-2 relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-full after:h-0.5 after:bg-gradient-to-r after:from-blue-500 after:to-purple-500 after:rounded-md">Últimas Ofertas de Trabajo</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
            @foreach($jobOffers as $job)
                <div class="bg-white p-5 shadow border border-gray-200 rounded-lg transition-all duration-300 ease-in-out hover:-translate-y-1 hover:shadow-lg hover:border-gray-300">
                    <div class="flex justify-between items-start mb-3">
                        <h2 class="text-lg font-semibold text-gray-800">{{ $job->title }}</h2>
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full">
                            {{ $job->location }}
                        </span>
                    </div>

                    <p class="text-gray-700 mb-3 text-sm h-12 overflow-hidden">{{ Str::limit($job->description, 100) }}</p>

                    <div class="flex justify-between items-center mt-4 pt-3 border-t border-gray-100">
                        <div>
                            <p class="text-gray-500 text-sm flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 01-1 1h-2a1 1 0 01-1-1v-2a1 1 0 00-1-1H7a1 1 0 00-1 1v2a1 1 0 01-1 1H3a1 1 0 01-1-1V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd" />
                                </svg>
                                <strong>Empresa:</strong> {{ $job->company_name }}
                            </p>
                            <p class="text-green-600 font-bold mt-1">
                                {{ $job->salary ? '$' . number_format($job->salary, 2) : 'Salario no especificado' }}
                            </p>
                        </div>
                        <a href="{{ route('job_offers.show', $job->id) }}" class="text-blue-500 font-medium relative inline-block px-4 py-2 rounded-md transition-all duration-200 ease-in-out hover:bg-blue-500 hover:text-white group">
                            Ver detalles
                            <span class="absolute opacity-0 right-2 transition-all duration-200 ease-in-out group-hover:opacity-100 group-hover:translate-x-1">→</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        @if($jobOffers->isEmpty())
            <div class="bg-gray-50 rounded-lg p-8 text-center mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400 mx-auto mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                </svg>
                <p class="text-gray-500 text-lg">No hay ofertas disponibles.</p>
                <p class="text-gray-400 mt-2">Las nuevas ofertas aparecerán aquí cuando estén disponibles.</p>
            </div>
        @endif
    </div>

    <script>
        // Pequeña animación para las tarjetas al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.grid > div');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</x-app-layout>
