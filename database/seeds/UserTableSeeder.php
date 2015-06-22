<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
/**
 * Created by PhpStorm.
 * User: apotente
 * Date: 06/05/15
 * Time: 13:37
 */

class UserTableSeeder extends Seeder {

    public function run ()
    {
        $faker = Faker::create();
        for ($i=0; $i<30; $i ++ )
        {
            $id= \DB::table('users')->insertGetId(array (
                'name'=>$faker->firstName,
                'email'=>$faker->unique()->email,
                'password'=>\Hash::make('secret'),
                'type'=>'user'
                )
            );

            \DB::table('user_profiles')->insert(array (
                    'user_id'=>$id,
                    'bio'=>$faker->paragraph(rand(2,5)),
                    'web'=>$faker->unique()->url,
                    'twitter'=>'http://twitter.com/'.$faker->unique()->userName,
                    'birthday'=>$faker->dateTimeBetween('-45 years','-15 years')->format('Y-m-d')
                )
            );
        }
    }

} 