<?php
use Illuminate\Database\Seeder;
use Monoku\Repositories\User\UserRepo;
/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 20/03/15
 * Time: 10:21
 */

class UserTableSeeder extends Seeder {

    public function run()
    {
        $userRepo = new UserRepo();
        $userRepo->create([
            'name' => 'Yoel Monzon',
            'email' => 'admin@hotmail.com',
            'password' => 'admin',
            'type' => 'admin'
        ]);
    }

}