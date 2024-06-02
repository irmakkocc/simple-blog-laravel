<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=['Top 100 Diziler', 'Top 100 Filmler', 'Diziler', 'Filmler'];
        foreach($categories as $category){
            DB::table('categories')->insert([
                'name'=>$category,
                'slug'=>Str::slug($category),
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
        
    }
}
