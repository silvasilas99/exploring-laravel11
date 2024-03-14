<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Contracts\Events\ShouldHandleEventsAfterCommit;
use Illuminate\Support\Facades\Log;

class UserObserver implements ShouldHandleEventsAfterCommit
{
    /**
     * Handle the User "created" event.
     *
     * @param User $user
     *
     * @return void
     */
    public function created(User $user): void
    {
        $this->logEvent($user, "created");
    }

    /**
     * Handle the User "updated" event.
     *
     * @param User $user
     *
     * @return void
     */
    public function updated(User $user): void
    {
        $this->logEvent($user, "updated");
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param User $user
     *
     * @return void
     */
    public function deleted(User $user): void
    {
        $this->logEvent($user, "deleted");
    }

    /**
     * Logs the name of the user on ./../../storage/logs/laravel.log
     *
     * @param User $user
     * @param string $event
     *
     * @return void
     */
    private function logEvent(User $user, string $event) : void
    {
        $name = data_get($user, "name", "");
        switch ($event) {
            case "created":
                Log::info("UserObserver.logEvent: Usuário {$name} criado.");
                break;
            case "updated":
                Log::info("UserObserver.logEvent: Usuário {$name} atualizado.");
                break;
            case "deleted":
                Log::info("UserObserver.logEvent: Usuário {$name} excluído.");
                break;
        }

        return;
    }
}
