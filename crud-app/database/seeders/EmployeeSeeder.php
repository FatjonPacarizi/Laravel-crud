<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Employee')->insert([
            [
                'name' => Str::random(5),
                'email' => Str::random(5).'@gmail.com',
                'address' => Str::random(8),
                'phone' => '+383'.rand(10000000, 99999999)
            ],
            [
                'name' => Str::random(5),
                'email' => Str::random(5).'@gmail.com',
                'address' => Str::random(8),
                'phone' => '+383'.rand(10000000, 99999999)
            ],
            [
                'name' => Str::random(5),
                'email' => Str::random(5).'@gmail.com',
                'address' => Str::random(8),
                'phone' => '+383'.rand(10000000, 99999999)
            ],
            [
                'name' => Str::random(5),
                'email' => Str::random(5).'@gmail.com',
                'address' => Str::random(8),
                'phone' => '+383'.rand(10000000, 99999999)
            ],
            [
                'name' => Str::random(5),
                'email' => Str::random(5).'@gmail.com',
                'address' => Str::random(8),
                'phone' => '+383'.rand(10000000, 99999999)
            ],
        ]);
    }
}
