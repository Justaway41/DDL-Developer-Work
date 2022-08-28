<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::create([
            'name' => 'Joe Smhoe',
            'Email' => 'joe@smhoe.com',
            'address' => 'your mom'
        ],
    );
    Listing::create([
        'name' => 'No Smhoe',
        'Email' => 'No@smhoe.com',
        'address' => 'your mom'
    ],
);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
