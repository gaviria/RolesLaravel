<?php

use App\user;
use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create Admin user
        User::crete([
        'name' => 'Administrador',
        'email' => 'prueba@prueba.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        ]);

        //Create 5 random users
        factory(App\User::class,5)->create();

        //Created admin rol
        Role::create([
            'name'      =>'Admin',
            'slug'      =>'admin',
            'special'   =>'all-access'
        ]);
    }
}
