<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $division = [
            [
                'name' => 'Division Gemastik',
                'email' => 'divisiongemastik@gmail.com',
                'password' => Hash::make('password'),
                'nim' => '0000000002'
            ],
            [
                'name' => 'Division PKM',
                'email' => 'divisionpkm@gmail.com',
                'password' => Hash::make('password'),
                'nim' => '0000000003'
            ],
            [
                'name' => 'Division MAWAPRES',
                'email' => 'divisionmawapres@gmail.com',
                'password' => Hash::make('password'),
                'nim' => '0000000004'
            ],
            [
                'name' => 'Division Data Ethusiast',
                'email' => 'divisiondataethusiast@gmail.com',
                'password' => Hash::make('password'),
                'nim' => '0000000005'
            ],
            [
                'name' => 'Division Creative',
                'email' => 'divisioncreative@gmail.com',
                'password' => Hash::make('password'),
                'nim' => '0000000006'
            ],
        ];

        $super_admin = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('password'),
            'nim' => '0000000000'
        ]);
        $super_admin->assignRole('super-admin');


        $user = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'nim' => '0000000001'
        ]);

        $user->assignRole('user');


        foreach ($division as $item) {
            $division_data = User::create([
                'name' => $item['name'],
                'email' => $item['email'],
                'password' => $item['password'],
                'nim' => $item['nim']
            ]);
            $division_data->assignRole('division');
        }
    }
}
