<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Faker\Factory as Faker;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,4) as $index) {
            User::create([
                //"username"=>$faker->word(5),
                "username"=>$faker->name,
                "usertitle"=>$faker->paragraph(4),
                "password"=>Hash::make($faker->password),
            ]);
        }

        /*
        User::create([
                "username"=>"Bahar",
                "usertitle"=>"senior",
                "password"=>Hash::make("123456"),
        ]);*/

    }
}
