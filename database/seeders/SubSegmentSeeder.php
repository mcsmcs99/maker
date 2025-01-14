<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubSegment;

class SubSegmentSeeder extends Seeder
{
    public function run()
    {
        $subSegments = [
            1 => ['Barbearias', 'Salões de beleza', 'Spas', 'Clínicas de estética', 'Manicure e pedicure', 'Massoterapia', 'Outros'],
            2 => ['Aulas particulares', 'Escolas de dança', 'Workshops e treinamentos', 'Outros'],
            3 => ['Estúdios de fotografia', 'Estúdios de ioga e pilates', 'Campos de futebol ou quadras esportivas', 'Personal trainers', 'Outros'],
            4 => ['Buffets', 'Locação de espaços para eventos', 'DJs e bandas', 'Organização de festas e eventos', 'Outros'],
            5 => ['Clínicas médicas', 'Clínicas odontológicas', 'Clínicas de fisioterapia', 'Psicólogos e terapeutas', 'Nutricionistas', 'Clínicas veterinárias', 'Outros'],
            6 => ['Alinhamento e balanceamento', 'Estéticas automotivas', 'Instalação de acessórios', 'Lava-jatos', 'Oficinas mecânicas', 'Outros'],
            7 => ['Agências de viagens', 'Corretores de imóveis', 'Contadores', 'Consultorias', 'Escritórios de advocacia', 'Outros'],
            8 => ['Designers de interiores', 'Eletricistas', 'Encanadores', 'Jardineiros', 'Pedreiros', 'Pintores', 'Outros'],
            9 => ['Agências de modelos', 'Cartórios', 'Estúdios de tatuagem', 'Pet shops', 'Outros'],
        ];

        foreach ($subSegments as $segmentId => $subLabels) {
            foreach ($subLabels as $label) {
                SubSegment::create([
                    'segment_id' => $segmentId,
                    'label'      => $label,
                ]);
            }
        }
    }
}