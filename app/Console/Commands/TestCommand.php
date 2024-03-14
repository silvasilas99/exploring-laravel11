<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test the application';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::create([ 'name' => 'Silas' ]);
        dd($user->id);
    }
}
