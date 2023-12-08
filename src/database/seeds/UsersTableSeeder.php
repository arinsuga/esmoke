<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
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
        //Reset table
        DB::table('users')->delete();

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'System Admin',
            'email' => 'sysadmin@appdesk.tech',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'remember_token' => Str::random(10),
            'bo' => true,
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Admin 1',
            'email' => 'admin1@appdesk.tech',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'remember_token' => Str::random(10),
            'bo' => true,
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Admin 2',
            'email' => 'admin2@appdesk.tech',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'remember_token' => Str::random(10),
            'bo' => true,
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Departemen Interior',
            'email' => 'interior@appdesk.tech',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'id' => 5,
            'name' => 'Departemen Arsitek',
            'email' => 'arsitek@appdesk.tech',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'remember_token' => Str::random(10),
        ]);


        DB::table('users')->insert([
            'id' => 6,
            'name' => 'Design and Build',
            'email' => 'dnb@appdesk.tech',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'remember_token' => Str::random(10),
            'technician' => true,
            'bo' => true,
        ]);

        DB::table('users')->insert([
            'id' => 7,
            'name' => 'Departemen IT',
            'email' => 'it@appdesk.tech',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'remember_token' => Str::random(10),
            'technician' => true,
            'bo' => true,
        ]);

        DB::table('users')->insert([
            'id' => 9,
            'name' => 'Departemen Keuangan',
            'email' => 'keuangan@appdesk.tech',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'remember_token' => Str::random(10),
            'technician' => true,
            'bo' => true,
        ]);

        DB::table('users')->insert([
            'id' => 10,
            'name' => 'Departemen Umum',
            'email' => 'umum@appdesk.tech',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'remember_token' => Str::random(10),
            'technician' => true,
            'bo' => true,
        ]);

        //dummy data
        //factory(App\User::class, 1000)->create();

    }
}
