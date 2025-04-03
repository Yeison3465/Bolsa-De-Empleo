<x-app-layout>
    <div class="container mx-auto p-6 bg-white shadow rounded">
        <h1 class="text-2xl font-bold">Editar Oferta</h1>

        <form action="{{ route('job_offers.update', $jobOffer->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mt-4">
                <label class="block text-gray-700">Título:</label>
                <input type="text" name="title" value="{{ $jobOffer->title }}" class="w-full border rounded p-2">
            </div>

            <div class="mt-4">
                <label class="block text-gray-700">Nombre de la Empresa:</label>
                <input type="text" name="company_name" value="{{ $jobOffer->company_name }}" class="w-full border rounded p-2">
            </div>

            <div class="mt-4">
                <label class="block text-gray-700">Ubicación:</label>
                <input type="text" name="location" value="{{ $jobOffer->location }}" class="w-full border rounded p-2">
            </div>

            <div class="mt-4">
                <label class="block text-gray-700">Descripción:</label>
                <textarea name="description" class="w-full border rounded p-2">{{ $jobOffer->description }}</textarea>
            </div>

            <div class="mt-4">
                <label class="block text-gray-700">Salario:</label>
                <input type="number" name="salary" value="{{ $jobOffer->salary }}" class="w-full border rounded p-2">
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Actualizar</button>
                <a href="{{ route('job_offers.myOffers') }}" class="bg-gray-500 text-white px-4 py-2 rounded ml-2">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>
