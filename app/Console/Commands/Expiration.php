<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class Expiration extends Command
{
    protected $signature = 'expiration';

    protected $description = 'Expire users with status 0';

    public function handle()
    {
        try {
            $users = User::where('status', 0)->get();

            foreach ($users as $user) {
                $user->update([
                    'status' => 1
                ]);
            }

            $this->info('Users expired successfully.');
        } catch (\Exception $e) {
            $this->error('An error occurred: ' . $e->getMessage());
        }
    }
}
