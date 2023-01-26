<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $userDatas=[
            [
                'name' => 'Diallo',
                'password' => '123',
                'email' => "foo.foo@example.com",
            ],
            
        ];
        foreach ($userDatas as $userData){
            $user = new User();
            $user->name = $userData['name'];
            $user->email = $userData['email'];
            $user->password = Hash::make($userData['password']);
            $user->save();
        }
    }
}
