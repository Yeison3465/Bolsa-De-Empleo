<x-app-layout>
    <div class="container mx-auto p-6 bg-white shadow rounded">
        <h1 class="text-2xl font-bold">Postulantes para: {{ $jobOffer->title }}</h1>
        <p class="text-gray-600"><strong>Empresa:</strong> {{ $jobOffer->company_name }}</p>

        @if($applicants->isEmpty())
            <p class="mt-4 text-gray-500">No hay postulantes para esta oferta.</p>
        @else
            <table class="w-full mt-4 border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">Nombre</th>
                        <th class="border border-gray-300 px-4 py-2">Apellido</th>
                        <th class="border border-gray-300 px-4 py-2">Correo</th>
                        <th class="border border-gray-300 px-4 py-2">CV</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applicants as $applicant)
                        <tr class="border border-gray-300">
                            <td class="border border-gray-300 px-4 py-2">{{ $applicant->first_name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $applicant->last_name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $applicant->email }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ asset('storage/' . $applicant->cv_path) }}" target="_blank" class="text-blue-500">Descargar CV</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <a href="{{ route('dashboard') }}" class="mt-4 inline-block bg-gray-500 text-white px-4 py-2 rounded">Volver</a>
    </div>
</x-app-layout>
