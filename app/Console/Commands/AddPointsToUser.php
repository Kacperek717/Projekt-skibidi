<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class AddPointsToUser extends Command
{
    protected $signature = 'user:add-points {user_id} {punkty}';
    protected $description = 'Dodaje punkty wybranemu użytkownikowi na podstawie ID';

    public function handle()
    {
        $userId = $this->argument('user_id');
        $punkty = $this->argument('punkty');

        $user = User::find($userId);

        if (!$user) {
            $this->error('Użytkownik o podanym ID nie istnieje.');
            return Command::FAILURE;
        }

        $user->punkty += (int) $punkty;
        $user->save();

        $this->info("Dodano {$punkty} punktów użytkownikowi {$user->name} (ID: {$user->id}).");
        return Command::SUCCESS;
    }
}
