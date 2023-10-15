<?php

namespace Database\Seeders;

use App\Models\DivisionProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Gemastik',
                'user_id' => 3,
                'logo' => 'gemastik'
            ],
            [
                'name' => 'PKM',
                'user_id' => 4,
                'logo' => 'pkm'
            ],
            [
                'name' => 'MAWAPRES',
                'user_id' => 5,
                'logo' => 'mawapres'
            ],
            [
                'name' => 'Creative',
                'user_id' => 6,
                'logo' => 'creative'
            ],
            [
                'name' => 'Data Ethusiast',
                'user_id' => 7,
                'logo' => 'data-ethusiast'
            ],
        ];


        foreach ($data as $item) {
            DivisionProfile::create([
                'name' => $item['name'],
                'user_id' => $item['user_id'],
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'guidebook_link' => 'https://google.com',
                'logo' => 'logo-' . $item['logo'] . '.png',
                'timeline' => 'timeline-' . $item['logo'] . '.png'
            ]);
        }
    }
}
