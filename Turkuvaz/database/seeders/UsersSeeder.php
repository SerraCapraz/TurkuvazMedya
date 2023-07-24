<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use http\Env\Request;
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
        /*
        $faker=Faker::create();

        $faker->validate([
            "username"=>"required|alpha_num:ascii|unique:users",
            "usertitle"=>"required",
            "password"=>"required|min:6",
        ]);

        foreach(range(1,4) as $index) {
            User::create([
                //"username"=>$faker->word(5),
                //"username"=>$faker->name(),
                "username"=>$faker->unique()->userName,
                "usertitle"=>$faker->paragraph(4),
                "password"=>Hash::make($faker->password(6)),
            ]);
        }


        User::create([
                "username"=>"Bahar",
                "usertitle"=>"senior",
                "password"=>Hash::make("123456"),
        ]);*/

        \App\Models\User::factory(2)->create();
    }
}
