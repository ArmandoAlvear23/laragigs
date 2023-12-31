<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        /*
        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'RGV Web Builders',
            'location' => 'Brownsville, TX',
            'email' => 'careers@rgvwebbuilders.com',
            'website' => 'https://www.rgvwebbuilders.com',
            'description' => 'We are looking for a motivated laravel developer to help us build amazing websites for our awesome customers!'
        ]);

        Listing::create([
            'title' => 'Full-Stack Engineer',
            'tags' => 'laravel, backend, api',
            'company' => 'RGV Web Builders',
            'location' => 'Brownsville, TX',
            'email' => 'careers@rgvwebbuilders.com',
            'website' => 'https://www.rgvwebbuilders.com',
            'description' => 'We are looking for a motivated Full-Stack Engineer to help us build amazing websites for our awesome customers!'
        ]);
        */
    }
}
