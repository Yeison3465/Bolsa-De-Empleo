<x-app-layout>
    <div class="container mx-auto p-6 bg-white shadow rounded">
        <h1 class="text-2xl font-bold">Postularse a: {{ $jobOffer->title }}</h1>
        <p class="text-gray-600 mt-2"><strong>Empresa:</strong> {{ $jobOffer->company_name }}</p>
        <p class="text-gray-700 mt-2"><strong>Ubicación:</strong> {{ $jobOffer->location }}</p>

        <form action="{{ route('applications.store') }}" method="POST" enctype="multipart/form-data" class="mt-6">
            @csrf
            <input type="hidden" name="job_offer_id" value="{{ $jobOffer->id }}">

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Nombre:</label>
                <input type="text" name="first_name" value="{{ Auth::user()->name }}" class="w-full p-2 border rounded" required readonly>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Apellido:</label>
                <input type="text" name="last_name" class="w-full p-2 border rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Correo Electrónico:</label>
                <input type="email" name="email" value="{{ Auth::user()->email }}" class="w-full p-2 border rounded" required readonly>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold">Adjuntar CV (PDF):</label>
                <input type="file" name="cv" accept=".pdf" class="w-full p-2 border rounded" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Enviar Postulación</button>
        </form>

        @if(session('success'))
            <p class="mt-4 text-green-600 font-bold">{{ session('success') }}</p>
        @endif

        <a href="{{ route('dashboard') }}" class="mt-4 inline-block bg-gray-500 text-white px-4 py-2 rounded">Volver</a>
    </div>
</x-app-layout>
