<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        for($i=0;$i<20;$i++){
            DB::table('clients')->insert([
                'name' => Str::random(10),
                'age' => 88,
                'email' => Str::random(10).'@gmail.com',
                // 'nanme' => 'test',
                // 'age' => '99',
                // 'email' => 'this@gmail.com',
               
            ]);
        }
    }
}
