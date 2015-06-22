<?php

use Illuminate\Database\Seeder;
/**
 * Created by PhpStorm.
 * User: apotente
 * Date: 06/05/15
 * Time: 13:37
 */

class AdminTableSeeder extends Seeder {

    public function run ()
    {

        \DB::table('users')->insert(array (
            'name'=>'Alejandro',
            'email'=>'apotente@gmail.com',
            'password'=>\Hash::make('secret'),
            'type'=>'admin'
            )
        );
    }

} 