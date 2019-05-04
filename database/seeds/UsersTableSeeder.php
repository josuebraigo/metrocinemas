<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name = "Josué Castillo";
        $user->email = "josue@braigo.mx";
        $user->password = bcrypt("123456");
        $user->save();

        $user = new User();
        $user->name = "Erick";
        $user->email = "eric@braigo.mx";
        $user->password = bcrypt("123456");
        $user->save();
    }
}
