<x-app-layout>
    <div class="container mx-auto p-6 bg-white shadow rounded">
        <h1 class="text-xl font-bold mb-4">Ofertas de Trabajo</h1>

        @foreach ($jobOffers as $job)
            <h2 class="text-lg font-semibold">{{ $job->title }}</h2>
            <p class="text-gray-500"><strong>Empresa:</strong> {{ $job->company_name }}</p>
            <p class="text-gray-600">{{ $job->location }}</p>
            <p class="text-gray-700">{{ Str::limit($job->description, 100) }}</p>
            <p class="text-green-600 font-bold">
                {{ $job->salary ? '$' . number_format($job->salary, 2) : 'Salario no especificado' }}
            </p>
            <a href="{{ route('job_offers.show', $job->id) }}" class="text-blue-500 mt-2 inline-block">Ver detalle</a>
        @endforeach

        <!-- Paginación -->
        <div class="mt-4">
            {{ $jobOffers->links() }}
        </div>
    </div>
</x-app-layout>
