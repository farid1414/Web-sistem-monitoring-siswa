<?php

namespace Database\Seeders;

use App\Models\logindminmodel;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        logindminmodel::create([
            'name' => 'Admin1',
            'email' => 'Admin134@gmail.com',
            'password' => bcrypt('admin1234'),
            'remember_token' => Str::random(60),
        ]);
    }
}
