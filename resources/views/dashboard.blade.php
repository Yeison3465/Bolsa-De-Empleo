<x-app-layout>
    <div class="container mx-auto p-6">
        <a href="{{ route('job_offers.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Crear Oferta de Trabajo</a>
        <a href="{{ route('job_offers.all') }}" class="bg-green-500 text-white px-4 py-2 rounded ml-4">Ver Todas las Ofertas</a>
        <a href="{{ route('job_offers.myOffers') }}" class="bg-purple-500 text-white px-4 py-2 rounded ml-4">Mis Ofertas</a>



        <h1 class="text-xl font-bold mt-4">Últimas Ofertas de Trabajo</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
            @foreach($jobOffers as $job)
                <div class="p-4 border rounded shadow">
                    <h2 class="text-lg font-semibold">{{ $job->title }}</h2>
                    <p class="text-gray-600">{{ $job->location }}</p>
                    <p class="text-gray-700">{{ Str::limit($job->description, 100) }}</p>
                    <p class="text-gray-500"><strong>Empresa:</strong> {{ $job->company_name }}</p>
                    <p class="text-green-600 font-bold">
                        {{ $job->salary ? '$' . number_format($job->salary, 2) : 'Salario no especificado' }}
                    </p>
                    <a href="{{ route('job_offers.show', $job->id) }}" class="text-blue-500 mt-2 inline-block">Ver detalle</a>
                    
                </div>
            @endforeach
        </div>

        @if($jobOffers->isEmpty())
            <p class="text-gray-500 mt-4">No hay ofertas disponibles.</p>
        @endif
    </div>
</x-app-layout>
