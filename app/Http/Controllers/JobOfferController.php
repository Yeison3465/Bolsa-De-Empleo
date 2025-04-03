<?php

namespace App\Http\Controllers;

use App\Models\JobOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobOfferController extends Controller
{
    // Muestra el formulario de creación


    public function index()
    {
        // Obtener las 6 ofertas más recientes
        $jobOffers = JobOffer::latest()->take(6)->get();

        return view('dashboard', compact('jobOffers'));
    }


    public function apply(JobOffer $jobOffer)
    {
        return view('JobOffer.apply', compact('jobOffer'));
    }

    public function show(JobOffer $jobOffer)
    {
        return view('JobOffer.show', compact('jobOffer'));
    }


    public function alloffers()
    {
        // Obtener todas las ofertas paginadas de 10 en 10
        $jobOffers = JobOffer::latest()->paginate(10);

        return view('JobOffer.all', compact('jobOffers'));
    }

    public function myOffers()
    {
        // Obtener todas las ofertas creadas por el usuario autenticado
        $jobOffers = JobOffer::where('user_id', Auth::id())->latest()->paginate(10);

        return view('JobOffer.my_offers', compact('jobOffers'));
    }

    public function edit(JobOffer $jobOffer)
    {
        // Verificar si el usuario autenticado es el dueño de la oferta
        if (Auth::id() !== $jobOffer->user_id) {
            abort(403, 'No tienes permiso para editar esta oferta.');
        }

        return view('JobOffer.edit', compact('jobOffer'));
    }

    public function update(Request $request, JobOffer $jobOffer)
    {
        if (Auth::id() !== $jobOffer->user_id) {
            abort(403, 'No tienes permiso para actualizar esta oferta.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'salary' => 'nullable|numeric|min:0|max:99999999.99',
        ]);

        $jobOffer->update($request->all());

        return redirect()->route('job_offers.myOffers')->with('success', 'Oferta actualizada exitosamente.');
    }

    public function destroy(JobOffer $jobOffer)
    {
        // Verificar si el usuario autenticado es el dueño de la oferta
        if (Auth::id() !== $jobOffer->user_id) {
            abort(403, 'No tienes permiso para eliminar esta oferta.');
        }

        $jobOffer->delete();

        return redirect()->route('job_offers.myOffers')->with('success', 'Oferta eliminada exitosamente.');
    }






    public function create()
    {
        return view('JobOffer.create');
    }

    // Guarda la oferta en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'salary' => 'nullable|numeric',
        ]);

        JobOffer::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'company_name' => $request->company_name,
            'description' => $request->description,
            'location' => $request->location,
            'salary' => $request->salary,
        ]);

        return redirect()->route('job_offers.create')->with('success', 'Oferta creada exitosamente.');
    }
}
