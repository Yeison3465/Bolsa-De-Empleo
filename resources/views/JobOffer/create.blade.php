<x-app-layout>
    <div class="container mx-auto p-6 bg-white shadow rounded">
        <h1 class="text-xl font-bold mb-4">Crear una nueva oferta de empleo</h1>

        @if(session('success'))
            <div class="p-4 mb-4 text-green-700 bg-green-200 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('job_offers.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="title" class="block font-medium">Título del trabajo</label>
                <input type="text" name="title" id="title" class="w-full p-2 border rounded" required>
            </div>

            <div class="mt-4">
                <label class="block text-gray-700">Nombre de la Empresa:</label>
                <input type="text" name="company_name" class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label for="description" class="block font-medium">Descripción</label>
                <textarea name="description" id="description" class="w-full p-2 border rounded" rows="4" required></textarea>
            </div>

            <div class="mb-4">
                <label for="location" class="block font-medium">Ubicación</label>
                <input type="text" name="location" id="location" class="w-full p-2 border rounded" required>
            </div>

            <div class="mb-4">
                <label for="salary" class="block font-medium">Salario (opcional)</label>
                <input type="number" name="salary" id="salary" class="w-full p-2 border rounded">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Publicar Oferta</button>
        </form>
    </div>
</x-app-layout>
