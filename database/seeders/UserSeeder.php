<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = ['Bangladesh','Pakistan','Syria','Libia','Egypt','Turkey','Yemen','Madives','Ethyopia'];        //
        foreach($countries as $country)
        {
        Category::create([
        'name'  =>  $country,
        ]);
        }

        $data = [
            ['name' => ' user_1'],
            ['name' => ' user_2'],
            ['name' => ' user_3'],
            ['name' => ' user_4'],
            ['name' => ' user_5'],
            ['name' => ' user_6'],
            ['name' => ' user_7'],
            ['name' => ' user_8'],
            ['name' => ' user_9'],
            ['name' => ' user_10'],
        ];
        foreach ($data as $key => $value) {
            Post::create($value);
        }
    }
}
