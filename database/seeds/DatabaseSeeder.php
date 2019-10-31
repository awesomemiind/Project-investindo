<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf'           => '47166817852',
            'name'          => 'Marcelo',
            'phone'         => '3512341234',
            'birth'         => '1980-10-01',
            'notes'         => 'teste',
            'gender'        => 'M',
            'email'         => 'marcelo@sistema.com',
            'password'      => env('PASSWORD_HASH') ? bcrypt('123456') : '123456',
            ]);

        // $this->call(UsersTableSeeder::class);
    }
}
