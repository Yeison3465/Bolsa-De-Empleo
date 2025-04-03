<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\JobOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ApplicationController extends Controller
{
    //

    public function showApplicants(JobOffer $jobOffer)
    {
        // Verifica que el usuario autenticado es el creador de la oferta
        if (Auth::id() !== $jobOffer->user_id) {
            abort(403, 'No tienes permiso para ver estos postulantes.');
        }

        // Obtener todos los postulantes de esta oferta
        $applicants = Application::where('job_offer_id', $jobOffer->id)->get();

        return view('Application.index', compact('applicants', 'jobOffer'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'job_offer_id' => 'required|exists:job_offers,id',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'cv' => 'required|mimes:pdf|max:2048',
        ]);

        $cvPath = $request->file('cv')->store('cvs', 'public');

        Application::create([
            'job_offer_id' => $request->job_offer_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'cv_path' => $cvPath,
        ]);

        return back()->with('success', 'Postulación enviada correctamente.');
    }
}
