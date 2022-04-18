<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        User::truncate();
        Team::truncate();

        Schema::enableForeignKeyConstraints();

        $user = User::factory()->create(
            [
                'name' => 'Amaia',
                'email' => 'info@amaia.eus',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'current_team_id' => 1
            ]
        );

        $team = Team::factory()->create(
            [
                'user_id' => $user->id,
                'name' => "Amaia's Team"
            ]
        );
    }
}
