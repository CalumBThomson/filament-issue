<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@filamentphp.com',
        ]);

        \App\Models\Example::create([
            'title' => 'What is Filament?',
            'slug' => 'what-is-filament',
            'status' => 'published',
            'is_featured' => 1,
            'author' => 'Dan Harrin',
        ]);

        \App\Models\Example::create([
            'title' => 'Top 5 best features of Filament',
            'slug' => 'top-5-features',
            'status' => 'reviewing',
            'is_featured' => 0,
            'author' => 'Ryan Chandler',
        ]);

        \App\Models\Example::create([
            'title' => 'Tips for building a great Filament plugin',
            'slug' => 'plugin-tips',
            'status' => 'draft',
            'is_featured' => 1,
            'author' => 'Zep Fietje',
        ]);

        \App\Models\Example::create([
            'title' => 'Customizing Filament\'s Ul with a theme',
            'slug' => 'theme-guide',
            'status' => 'reviewing',
            'is_featured' => 0,
            'author' => 'Dennis Koch',
        ]);

        \App\Models\Example::create([
            'title' => 'New Filament plugins in August',
            'slug' => 'new-plugins-august',
            'status' => 'published',
            'is_featured' => 0,
            'author' => 'Adam Weston',
        ]);

    }
}
