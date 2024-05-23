<?php


namespace Database\Seeders;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => null,
            'first_name' => 'admin',
            'last_name' => 'admin',
            'phone' => '09383448367',
            'birthday' => Carbon::make('1999'),
            'gender' => 'male',
            'avatar' => 'panel/avatars/default.png',
            'city_id' => 'nam-dinh',
            'country_id' => 'VN',
        ]);
    }
}
