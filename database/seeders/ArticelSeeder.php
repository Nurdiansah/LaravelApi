<?php

namespace Database\Seeders;

use App\Models\Articel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Articel::create([
            'user_id' => '1',
            'subject' => 'PHP',
            'body' => 'PHP Adalah'
        ]);

        Articel::create([
            'user_id' => '1',
            'subject' => 'JAVA',
            'body' => 'JAVA Adalah'
        ]);

        Articel::create([
            'user_id' => '1',
            'subject' => 'C++',
            'body' => 'C++ Adalah'
        ]);
    }
}
