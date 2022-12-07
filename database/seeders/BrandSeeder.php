<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'Dell',
            'slug' => 'dell'
        ]);
        Brand::create([
            'name' => 'HP',
            'slug' => 'hp'
        ]);
        Brand::create([
            'name' => 'Lenovo',
            'slug' => 'lenovo'
        ]);
        Brand::create([
            'name' => 'Apple',
            'slug' => 'apple'
        ]);
        Brand::create([
            'name' => 'Asus',
            'slug' => 'asus'
        ]);
        Brand::create([
            'name' => 'Acer',
            'slug' => 'acer'
        ]);
        Brand::create([
            'name' => 'Samsung',
            'slug' => 'samsung'
        ]);
        
    }
}
