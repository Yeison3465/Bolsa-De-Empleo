<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-6 flex-wrap gap-4">
            <h1 class="text-xl font-bold relative pb-2 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-[50px] after:h-[3px] after:bg-blue-500 after:rounded-md">Mis Ofertas de Trabajo</h1>
            <a href="{{ route('job_offers.create') }}" class="inline-flex items-center bg-gradient-to-r from-blue-500 to-blue-600 text-white py-2.5 px-5 rounded-md font-medium transition-all duration-200 ease-in-out shadow-sm hover:-translate-y-0.5 hover:shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Crear Nueva Oferta
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
            @foreach ($jobOffers as $job)
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm p-5 transition-all duration-300 flex flex-col h-full hover:-translate-y-1 hover:shadow-lg hover:border-gray-300">
                    <div class="mb-3 border-b border-gray-100 pb-3">
                        <h2 class="text-lg font-semibold text-gray-800 mb-2 leading-relaxed">{{ $job->title }}</h2>
                        <p class="flex items-center text-sm text-gray-500 mb-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            <strong>Empresa:</strong> {{ $job->company_name }}
                        </p>
                        <p class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            {{ $job->location }}
                        </p>
                    </div>

                    <div class="flex-grow mb-4">
                        <p class="text-sm text-gray-600 leading-relaxed mb-4 line-clamp-3">{{ Str::limit($job->description, 100) }}</p>
                        <div class="inline-flex items-center bg-green-50 text-green-700 px-3 py-1 rounded-full font-semibold text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            {{ $job->salary ? '$' . number_format($job->salary, 2) : 'Salario no especificado' }}
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 mt-4 pt-4 border-t border-gray-100">
                        <a href="{{ route('job_offers.show', $job->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-md text-blue-500 bg-blue-50 transition hover:bg-blue-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            Ver detalle
                        </a>
                        <a href="{{ route('job_offers.edit', $job->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-md text-amber-600 bg-amber-50 transition hover:bg-amber-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            Editar
                        </a>
                        <a href="{{ route('job_offers.applicants', $job->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-md text-purple-600 bg-purple-50 transition hover:bg-purple-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Ver postulantes
                        </a>
                        <form action="{{ route('job_offers.destroy', $job->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Estás seguro de eliminar esta oferta?')" class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-md text-red-500 bg-red-50 transition hover:bg-red-100 cursor-pointer border-0 font-inherit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Paginación -->
        <div class="mt-8">
            {{ $jobOffers->links() }}
        </div>

        @if ($jobOffers->isEmpty())
            <div class="text-center py-12 px-6 bg-gray-50 rounded-lg mt-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                </svg>
                <p class="text-lg text-gray-500">No has publicado ninguna oferta todavía.</p>
            </div>
        @endif
    </div>

    <script>
        // Animación para las tarjetas al cargar
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.bg-white.rounded-lg');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</x-app-layout>
