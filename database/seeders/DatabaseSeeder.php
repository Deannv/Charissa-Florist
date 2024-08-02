<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Charissa Florist Admin',
            'email' => 'charissa-florist@gmail.com',
            'password' => bcrypt('bMj26rcsKDSlaiw7B44H'),
        ]);

        $socialMedia = [
            [
                'name' => 'Instagram',
                'url' => 'https://www.instagram.com/charissaflorist/'
            ],
            [
                'name' => 'TikTok',
                'url' => 'https://www.tiktok.com/@charissaflorist'
            ],
        ];

        foreach ($socialMedia as $socmed) {
            SocialMedia::create($socmed);
        }
    }
}
