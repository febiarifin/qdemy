<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Setting;
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
        // Generate setting 
        Setting::factory()->create();
       
        // Generate random blog
        Blog::factory(30)->create();
        
        // Generate Categry Class 
        $names = [
            'Kelas Web',
            'Kelas Android',
            'Kelas Machine Learning',
            'Kelas DevOps',
            'Kelas Digital Marketing',
            'Kelas Desainer',
        ];
        $descriptions = [
            'Akses kelas Web dengan banyak pilihan dari para ahli dibidangnya.',
            'Akses kelas Android dengan banyak pilihan dari para ahli dibidangnya.',
            'Akses kelas Machine Learning dengan banyak pilihan dari para ahli dibidangnya.',
            'Akses kelas DevOps dengan banyak pilihan dari para ahli dibidangnya.',
            'Akses kelas Digital Marketing dengan banyak pilihan dari para ahli dibidangnya.',
            'Akses kelas Desainer dengan banyak pilihan dari para ahli dibidangnya.',
        ];
        for ($i=0; $i < 6; $i++) { 
            Category::create([
                'name' => $names[$i],
                'description' => $descriptions[$i],
            ]);
        }
    }
}
