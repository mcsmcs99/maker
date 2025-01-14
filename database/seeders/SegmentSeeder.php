<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Segment;

class SegmentSeeder extends Seeder
{
    public function run()
    {
        $segments = [
            'Beleza e bem-estar',
            'Educação e treinamento',
            'Esporte e lazer',
            'Eventos',
            'Saúde',
            'Serviços automotivos',
            'Serviços profissionais',
            'Serviços residenciais',
            'Outros'
        ];

        foreach ($segments as $segment) {
            Segment::create(['label' => $segment]);
        }

    }
}