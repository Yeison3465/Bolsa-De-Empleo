<x-app-layout>
    <div class="container mx-auto p-6 bg-white shadow rounded">
        <h1 class="text-2xl font-bold">{{ $jobOffer->title }}</h1>
        <p class="text-gray-500"><strong>Empresa:</strong> {{ $jobOffer->company_name }}</p>
        <p class="text-gray-600 mt-2"><strong>Ubicación:</strong> {{ $jobOffer->location }}</p>
        <p class="text-gray-700 mt-2"><strong>Descripción:</strong> {{ $jobOffer->description }}</p>
        <p class="text-green-600 font-bold mt-2">
            <strong>Salario:</strong>
            {{ $jobOffer->salary ? '$' . number_format($jobOffer->salary, 2) : 'No especificado' }}
        </p>
        <a href="{{ route('dashboard') }}" class="mt-4 inline-block bg-gray-500 text-white px-4 py-2 rounded">Volver</a>
        <a href="{{ route('job_offers.apply', $jobOffer->id) }}"
            class="mt-4 inline-block bg-green-500 text-white px-4 py-2 rounded">
            Postularse
        </a>

        

    </div>
</x-app-layout>
