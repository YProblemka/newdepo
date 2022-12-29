<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                "login" => "admin",
                "password" => env('ADMIN_PASSWORD', 'Rad027S')
            ]
        ];
        foreach ($admins as $admin) {
            $user = User::query()->where("login", $admin["login"])->get()->first() ?? new User();
            if (!$user->exists) {
                User::query()->create($admin)->save();
            } else {
                $user->password = $admin["password"];
                $user->save();
            }
        }
    }
}
