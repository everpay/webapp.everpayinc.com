<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$8d/k8RKScZna4PBWNdOlIuSc8EYZZ/H2Hid5nBH/svziTfYJcZVSu',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
