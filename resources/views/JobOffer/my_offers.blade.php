<x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-xl font-bold mb-4">Mis Ofertas de Trabajo</h1>

        <a href="{{ route('job_offers.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Crear Nueva Oferta</a>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
            @foreach ($jobOffers as $job)
                <div class="p-4 border rounded shadow">
                    <h2 class="text-lg font-semibold">{{ $job->title }}</h2>
                    <p class="text-gray-500"><strong>Empresa:</strong> {{ $job->company_name }}</p>
                    <p class="text-gray-600">{{ $job->location }}</p>
                    <p class="text-gray-700">{{ Str::limit($job->description, 100) }}</p>
                    <p class="text-green-600 font-bold">
                        {{ $job->salary ? '$' . number_format($job->salary, 2) : 'Salario no especificado' }}
                    </p>

                    <a href="{{ route('job_offers.show', $job->id) }}" class="text-blue-500 mt-2 inline-block">Ver
                        detalle</a>
                    <a href="{{ route('job_offers.edit', $job->id) }}"
                        class="text-yellow-500 mt-2 inline-block ml-2">Editar</a>
                    <a href="{{ route('job_offers.applicants', $job->id) }}"
                        class="text-purple-500 mt-2 inline-block">Ver postulantes</a>

                    <form action="{{ route('job_offers.destroy', $job->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de eliminar esta oferta?')"
                            class="text-red-500 mt-2 inline-block ml-2">Eliminar</button>
                    </form>
                </div>
            @endforeach

        </div>

        {{ $jobOffers->links() }} <!-- Paginación -->

        @if ($jobOffers->isEmpty())
            <p class="text-gray-500 mt-4">No has publicado ninguna oferta todavía.</p>
        @endif
    </div>
</x-app-layout>
