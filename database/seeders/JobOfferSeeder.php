<?php

namespace Database\Seeders;

use App\Models\JobOffer;
use App\Models\User;
use Illuminate\Database\Seeder;

class JobOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Obtener un usuario existente o crear uno nuevo si no hay usuarios
        $user = User::first() ?? User::create([
            'name' => 'Default User',
            'email' => 'default@example.com',
            'password' => bcrypt('123456789'),
        ]);

        // Primera oferta de empleo
        $job = new JobOffer();
        $job->user_id = $user->id;
        $job->title = 'Desarrollador Backend';
        $job->company_name = 'Tech Company';
        $job->description = 'Se busca un desarrollador backend con experiencia en Laravel.';
        $job->location = 'Ciudad de México';
        $job->salary = 5000;
        $job->save();

        // Segunda oferta de empleo
        $job = new JobOffer();
        $job->user_id = $user->id;
        $job->title = 'Diseñador UI/UX';
        $job->company_name = 'Design Studio';
        $job->description = 'Empresa de tecnología busca diseñador UI/UX con experiencia.';
        $job->location = 'Bogotá';
        $job->salary = 4000;
        $job->save();

        // Tercera oferta de empleo
        $job = new JobOffer();
        $job->user_id = $user->id;
        $job->title = 'Ingeniero de DevOps';
        $job->company_name = 'Cloud Solutions';
        $job->description = 'Se requiere un ingeniero DevOps con conocimientos en AWS.';
        $job->location = 'Buenos Aires';
        $job->salary = 6000;
        $job->save();

        // Cuarta oferta de empleo
        $job = new JobOffer();
        $job->user_id = $user->id;
        $job->title = 'Analista de Datos';
        $job->company_name = 'Data Analytics';
        $job->description = 'Buscamos un analista de datos con experiencia en SQL y Python.';
        $job->location = 'Santiago de Chile';
        $job->salary = 4500;
        $job->save();
        // Quinta oferta de empleo
        $job = new JobOffer();
        $job->user_id = $user->id;
        $job->title = 'Gerente de Proyectos';
        $job->company_name = 'Project Management';
        $job->description = 'Se busca un gerente de proyectos con experiencia en metodologías ágiles.';
        $job->location = 'Lima';
        $job->salary = 7000;
        $job->save();

        // Sexta oferta de empleo
        $job = new JobOffer();
        $job->user_id = $user->id;
        $job->title = 'Desarrollador Frontend';
        $job->company_name = 'Web Development';
        $job->description = 'Se busca un desarrollador frontend con experiencia en React.';
        $job->location = 'Madrid';
        $job->salary = 5500;
        $job->save();

        // Séptima oferta de empleo
        $job = new JobOffer();
        $job->user_id = $user->id;
        $job->title = 'Administrador de Base de Datos';
        $job->company_name = 'Database Solutions';
        $job->description = 'Se busca un administrador de base de datos con experiencia en MySQL.';
        $job->location = 'Barcelona';
        $job->salary = 4800;
        $job->save();
        // Octava oferta de empleo
        $job = new JobOffer();
        $job->user_id = $user->id;
        $job->title = 'Desarrollador Móvil';
        $job->company_name = 'Mobile Apps';
        $job->description = 'Se busca un desarrollador móvil con experiencia en Flutter.';
        $job->location = 'Valencia';
        $job->salary = 5200;
        $job->save();
        // Novena oferta de empleo
        $job = new JobOffer();
        $job->user_id = $user->id;
        $job->title = 'Especialista en Ciberseguridad';
        $job->company_name = 'Cybersecurity Firm';
        $job->description = 'Se busca un especialista en ciberseguridad con experiencia en pentesting.';
        $job->location = 'Sevilla';
        $job->salary = 6500;
        $job->save();
        // Décima oferta de empleo
        $job = new JobOffer();
        $job->user_id = $user->id;
        $job->title = 'Arquitecto de Software';
        $job->company_name = 'Software Architecture';
        $job->description = 'Se busca un arquitecto de software con experiencia en microservicios.';
        $job->location = 'Bilbao';
        $job->salary = 8000;
        $job->save();
        // Undécima oferta de empleo
        $job = new JobOffer();
        $job->user_id = $user->id;
        $job->title = 'Tester de Software';
        $job->company_name = 'Quality Assurance';
        $job->description = 'Se busca un tester de software con experiencia en pruebas automatizadas.';
        $job->location = 'Granada';
        $job->salary = 4000;
        $job->save();

    }
}
