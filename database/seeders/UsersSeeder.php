<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedUsers = [
            [
                'id' => 1,
                'name' => "Ad Ministrator",
                'email' => "ad.ministrator@example.com",
                'email_verified_at' => "1900/01/01 00:00:00",
                'password' => "Password1",
                'created_at' => "1900/01/01 00:00:00",
                'timezone' => "Australia/Perth",
            ],

            [
                'id' => 5,
                'name' => "YOUR NAME",
                'email' => "GIVEN@example.com",
                'email_verified_at' => "1900/01/01 00:01:00",
                'password' => "Password1",
                'created_at' => "1900/01/01 00:00:01",
                'timezone' => "Australia/Perth",
            ],
            [
                'id' => 6,
                'name' => "Andy Manager",
                'email' => "andy.manager@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "Australia/Perth",
            ]
        ];
        $countItems = count($seedUsers);

        $output = new ConsoleOutput();
        $progressBar = new ProgressBar($output, $countItems);
        
        foreach ($seedUsers as $user) {
            $user = User::create($user);
            $progressBar->advance();
        }
        $progressBar->finish();
        $this->command->getOutput()->writeln("");
    }
}
