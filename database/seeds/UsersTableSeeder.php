<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'Administrador',
            'email'=>'admin@mail.com',
            'company'=>'Fundacion JBorja',
            'password'=>Hash::make('123456'),
            'role'=>0 //Administrador
        ]);

        $user = User::create([
            'name'=>'Coach',
            'email'=>'coach@mail.com',
            'company'=>'Fundacion JBorja',
            'password'=>Hash::make('123456'),
            'role'=>1 //Coach
        ]);

        $user = User::create([
            'name'=>'Usuario',
            'email'=>'usuario@mail.com',
            'company'=>'Fundacion JBorja',
            'password'=>Hash::make('123456'),
            'role'=>2 //Usuario
        ]);

    }
}
