<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Country;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Hash;
use DB;
class PivotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('country_user')->insert([
            'country_id' => Country::all()->random(10),
            'user_id' => User::all()->random(10),
        ]);



        DB::table('country_user')->insert(
            [
                'country_id' => factory(App\Models\User::class)->create()->id,
                'user_id' => factory(App\Models\Country::class)->create()->id,
            ]
        );

        Schema::enableForeignKeyConstraints(); 
    }
}
