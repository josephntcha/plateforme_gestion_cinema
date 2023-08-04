<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Projection;


class ProjectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $film1 = Film::firstOrCreate(['title' => 'JAKIZAN', 'description' => 'Film chinois qui expose le recit d\'une guerre lointaine dans une petit villagge']);
        // $film2 = Film::firstOrCreate(['title' => 'DJETLI', 'description' => 'Un film très educative']);
        // $film3 = Film::firstOrCreate(['title' => 'NAZARR', 'description' => 'Film du peuple']);
        // $film4 = Film::firstOrCreate(['title' => 'ANACONDA', 'description' => 'Un serpent intelligent']);
        // $film5 = Film::firstOrCreate(['title' => 'LE DINAUZORE', 'description' => 'Histoire des animaux disparuts']);
        // $film6 = Film::firstOrCreate(['title' => 'MERLIN', 'description' => 'Le pouvoir dans la main d\'un petit enfant']);
        // $film7 = Film::firstOrCreate(['title' => 'Le vrai crime', 'description' => 'Film nigerian']);
        

        // Insérer des projections de démo pour chaque film
        Projection::create([
            'title' => 'JAKIZAN',
            'description' => 'Film chinois qui expose le recit d\'une guerre lointaine dans une petit villagge',
            'heur_projection' => now()->addDays(1)->setHour(15)->setMinute(0), // Exemple de date et heure de début
            'place_reserver' => 10,
            'place_libre' => 50, // Définir le nombre de places disponibles ici
            'reserver_place' => 1,
            'montant' => 1000,
        ]);
        Projection::create([
            'title' => 'DJETLI',
            'description' => 'Un film très educative',
            'heur_projection' => now()->addDays(2)->setHour(16)->setMinute(10), // Exemple de date et heure de début
            'place_reserver' => 22,
            'place_libre' => 100, // Définir le nombre de places disponibles ici
            'reserver_place' => 1,
            'montant' => 1000,
        ]);
        Projection::create([
            'title' => 'NAZARR',
            'description' => 'Film du peuple ',
            'heur_projection' => now()->addDays(3)->setHour(15)->setMinute(17), // Exemple de date et heure de début
            'place_reserver' => 30,
            'place_libre' => 50, // Définir le nombre de places disponibles ici
            'reserver_place' => 1,
            'montant' => 1000,
        ]);
        Projection::create([
            'title' => 'ANACONDA',
            'description' => 'Un serpent intelligent',
            'heur_projection' => now()->addDays(4)->setHour(15)->setMinute(30), // Exemple de date et heure de début
            'place_reserver' => 11,
            'place_libre' => 50, // Définir le nombre de places disponibles ici
            'reserver_place' => 1,
            'montant' => 1000,
        ]);
        Projection::create([
            'title' => 'LE DINAUZORE',
            'description' => 'Histoire des animaux disparuts',
            'heur_projection' => now()->addDays(5)->setHour(15)->setMinute(45), // Exemple de date et heure de début
            'place_reserver' => 40,
            'place_libre' => 50, // Définir le nombre de places disponibles ici
            'reserver_place' => 1,
            'montant' => 1000,
        ]);
        Projection::create([
            'title' => 'MERLIN',
            'description' => 'Le pouvoir dans la main d\'un petit enfant',
            'heur_projection' => now()->addDays(6)->setHour(15)->setMinute(16), // Exemple de date et heure de début
            'place_reserver' => 19,
            'place_libre' => 40, // Définir le nombre de places disponibles ici
            'reserver_place' => 1,
            'montant' => 1000,
        ]);
        Projection::create([
            'title' => 'Le vrai crime',
            'description' => 'Film nigerian',
            'heur_projection' => now()->addDays(7)->setHour(15)->setMinute(12), // Exemple de date et heure de début
            'place_reserver' => 32,
            'place_libre' => 80, // Définir le nombre de places disponibles ici
            'reserver_place' => 1,
            'montant' => 1000,
        ]);

    }
}
