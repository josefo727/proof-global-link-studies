<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $now = now();
        $cuorses = [
            'Introducción a Laravel',
            'Fundamentos de VueJS',
            'Dominando Livewire',
            'ReactJS Básico',
            'Docker para Desarrolladores',
            'Laravel Avanzado',
            'VueJS y Vuex',
            'Livewire y Alpine.js',
            'ReactJS y Redux',
            'Docker y Kubernetes',
            'Laravel y TDD',
            'VueJS 3.0',
            'Livewire en la Práctica',
            'ReactJS con Hooks',
            'Docker para Producción'
        ];

        $path = "https://www.compartirpalabramaestra.org/sites/default/files/styles/articulos/public/field/image/5-cursos-educativos-gratuitos-para-maestros-y-rectores.jpg";

        foreach ($cuorses as $course) {
            DB::table('courses')->insert([
                'name' => $course,
                'slug' => Str::slug($course),
                'image' => $path,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
